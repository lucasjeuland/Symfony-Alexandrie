FROM php:7.4-fpm-alpine3.14

WORKDIR /var/www/symfony_docker

RUN set -ex \
  && apk --no-cache add \
    postgresql-dev  \
    curl-dev

RUN docker-php-ext-install pgsql curl pdo pdo_pgsql

