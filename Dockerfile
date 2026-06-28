FROM php:apache

RUN apt-get update && apt-get install -y \
    libicu-dev \
    && docker-php-ext-install intl mysqli pdo_mysql \
    && rm -rf /var/lib/apt/lists/*