FROM php:7.1-fpm-alpine

# Packages to install .. son dependencias para pdo_pgsql y xmlrpc
ENV PACKAGES="postgresql-dev libxml2-dev"

RUN set -ex && \
#apk --no-cache add postgresql-libs postgresql-dev libxml2-dev && \
apk --no-cache add postgresql-libs $PACKAGES && \
docker-php-ext-install \
pgsql \
#pdo_pgsql \
pdo_mysql \
mbstring \
tokenizer \
json \
ctype \
xmlrpc && \
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
php composer-setup.php --install-dir=/usr/bin --filename=composer && \
php -r "unlink('composer-setup.php');"

RUN apk del $PACKAGES
