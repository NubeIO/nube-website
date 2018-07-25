pipeline {
    agent {
        docker { 
            image 'alpine:latest'
            args '-v /var/run/docker.sock:/var/run/docker.sock:ro'
        }
    }
    environment {
        REPO = 'nubeio-sale'
        PRIVATE_REPO = "${PRIVATE_DOCKER_REGISTRY}/${REPO}"
    }

    stages {

        stage("Prepare") {
            steps {
                script {
                    def current = sh (script: 'date +%Y%m%d', returnStdout: true).trim()
                    HASH_TAG = "${current}.${GIT_COMMIT.substring(0,8)}"
                    BRANCH_TAG = "${BRANCH_NAME}" == "master" ? "latest" : "${BRANCH_NAME}".replaceAll(/[^a-zA-Z0-9\.\-\_]+/, "-")
                }
                sh 'printenv'
                sh 'apk add --no-cache bash git docker'
            }
        }

        stage("Build") {
            steps {
                echo "Continous Integration"
                script {
                    sh "docker build -t ${PRIVATE_REPO}:${HASH_TAG} -f .docker/Dockerfile ./"
                }
            }
        }

        stage("Publish") {
            steps {
                echo "Continous Delivery"
                script {
                    docker.withRegistry("https://${env.PRIVATE_DOCKER_REGISTRY}", "${env.PRIVATE_DOCKER_CREDENTIALS}") {
                        sh "docker tag  ${PRIVATE_REPO}:${HASH_TAG} ${PRIVATE_REPO}:${BRANCH_TAG}"
                        sh "docker push ${PRIVATE_REPO}:${HASH_TAG}"
                        sh "docker push ${PRIVATE_REPO}:${BRANCH_TAG}"
                    }
                }
            }
        }

    }

    post {
        failure {
            script {
                def committerEmail = sh (script: 'git --no-pager show -s --format=\'%ae\'', returnStdout: true).trim()
                def committer = sh (script: 'git --no-pager show -s --format=\'%an\'', returnStdout: true).trim()
                def content = """
                    - Job Name: ${env.JOB_NAME}
                    - Build URL: ${env.BUILD_URL}
                    - Changes:
                        - ${committer} <${committerEmail}>
                        - ${env.GIT_COMMIT}
                        - ${env.GIT_BRANCH}
                        - ${env.GIT_URL}
                """
                emailext (
                    recipientProviders: [[$class: "DevelopersRecipientProvider"]],
                    subject: "[Jenkins] ${env.JOB_NAME}-#${env.BUILD_NUMBER} [${currentBuild.result}]",
                    body: "${content}",
                    attachLog: true,
                    compressLog: true
                )
            }
        }
    }
}