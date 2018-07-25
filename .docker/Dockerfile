FROM php:7.2.6-apache-stretch

COPY .nubeIO/ /srv/app
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /srv/app

RUN chown -R www-data:www-data /srv/app \
    && a2enmod rewrite
