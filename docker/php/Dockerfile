FROM php:8.1-apache

# Node.jsのバージョン
ENV NODE_VERSION=16.x


# Apacheの a2enmod rewriteを有効
RUN a2enmod rewrite

# apt-get update && install
RUN apt-get update && apt-get install -y \
    automake autoconf pngquant libpng-dev libxrender1 libfontconfig libxext6 fonts-ipafont \
    zip unzip


# apt-get update && install
RUN apt-get update && apt-get install -y \
    automake autoconf pngquant libpng-dev libxrender1 libfontconfig libxext6 fonts-ipafont \
    zip unzip

RUN apt-get install -y apache2

RUN apt-get install -y libpq-dev \
  && docker-php-ext-install pdo pdo_pgsql pdo_mysql gd


ENV COMPOSER_ALLOW_SUPERUSER 1
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

ADD docker/php/php.ini /usr/local/etc/php/
ADD docker/php/apache/000-default.conf /etc/apache2/sites-enabled/


# xdebug
RUN pecl install xdebug \
  && docker-php-ext-enable xdebug


# Node.jsのリポジトリを追加
RUN curl -fsSL https://deb.nodesource.com/setup_${NODE_VERSION} | bash -

# Node.jsをインストール
RUN apt-get update && apt-get install -y nodejs


WORKDIR /var/www/html




