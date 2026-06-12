FROM serversideup/php:8.4-unit

USER root

RUN install-php-extensions \
    pdo_mysql \
    intl \
    zip \
    gd \
    exif \
    ftp \
    bcmath \
    redis

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install \
    --no-dev \
    --prefer-dist \
    --optimize-autoloader \
    --no-interaction

RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

RUN npm install \
    && npm run build

RUN mkdir -p storage bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

COPY unit.json /docker-entrypoint.d/

USER www-data