FROM php:8.4-fpm

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip pdo \
    && rm -rf /var/lib/apt/lists/*

# Composer available inside the container
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html/app

# Copy app (image build is reproducible; compose volume will override for live dev)
COPY app/ .

RUN composer install --no-interaction --prefer-dist

CMD ["php-fpm"]
