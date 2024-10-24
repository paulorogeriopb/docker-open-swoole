FROM php:8.3-cli-alpine

RUN apk add --no-cache \
  bash \
  git \
  build-base \
  autoconf \
  libzip-dev \ 
  inotify-tools

RUN docker-php-ext-install zip pdo_mysql
RUN pecl install swoole-5.1.2 && docker-php-ext-enable swoole 

WORKDIR /app

EXPOSE 8000


