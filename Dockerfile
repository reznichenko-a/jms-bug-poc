ARG PHP_VERSION=8.2

FROM php:${PHP_VERSION}-cli-alpine

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . /app

RUN ["composer", "install"]
