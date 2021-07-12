FROM alpine AS build

RUN apk add --update \
    autoconf \
    automake \
    composer \
    g++ \
    gcc \
    gettext \
    git \
    libc6-compat \
    libpng \
    libtool \
    make \
    musl \
    nodejs \
    npm \
    php7 \
    php7-curl \
    php7-json \
    yasm \
    zlib \
    zlib-dev

RUN mkdir /app
WORKDIR /app

COPY . /app

RUN git submodule init && git submodule update --force --rebase
RUN npm ci
RUN cd _backend && composer install
RUN npm run build

FROM php:apache

RUN apt-get update && apt-get install -y \
    libcurl4-openssl-dev

RUN docker-php-ext-install \
    curl \
    json

RUN a2enmod expires rewrite

RUN rm -rf /var/www/html/*
COPY --from=build /app /var/www/html
RUN rm -rf \
    /var/www/html/_images \
    /var/www/html/_scripts \
    /var/www/html/_styles \
    /var/www/html/_tests \
    /var/www/html/.github \
    /var/www/html/node_modules
