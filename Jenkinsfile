pipeline {
    agent { docker "busybox:latest" }
    environment {
        REPO = 'nubeio-sale'
        PRIVATE_REPO = "${PRIVATE_REGISTRY}/${REPO}"
    }

    stages {

        stage("Prepare") {
            steps {
                script {
                    def current = sh (
                        script: 'date +%Y%m%d',
                        returnStdout: true
                    ).trim()
                    def IMAGE_TAG = "${current}-${GIT_COMMIT.substring(0,8)}"
                    def TAG = "${BRANCH_NAME}"
                    if ("${BRANCH_NAME}" == "master") {
                        TAG = "latest"
                    }
                }
            }
        }

        stage("Build") {
            steps {
                echo "Continous Integration"
                sh "docker build -f .docker/Dockerfile -t ${REPO}:${IMAGE_TAG}"
            }
            post {
                success {
                    echo 'Tag for private registry'
                    sh "docker tag ${REPO}:${IMAGE_TAG} ${PRIVATE_REPO}:${TAG}"
                }
            }
        }

        stage("Publish") {
            steps {
                echo "Continous Delivery"
                docker.withRegistry("${env.PRIVATE_REGISTRY}", "${env.DOCKER_CREDENTIALS}") {
                    sh "docker push ${PRIVATE_REPO}:${TAG}"
                }
            }
        }

    }

    post {
        failure {
            script {
                def committerEmail = sh (
                    script: 'git --no-pager show -s --format=\'%ae\'',
                    returnStdout: true
                ).trim()
                def committer = sh (
                    script: 'git --no-pager show -s --format=\'%an\'',
                    returnStdout: true
                ).trim()
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