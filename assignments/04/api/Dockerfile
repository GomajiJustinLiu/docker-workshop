FROM php:alpine3.12

WORKDIR /app

COPY ./broadcast.php ./composer.json ./composer.lock ./

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

RUN composer install

EXPOSE 8080

CMD ["php", "-S", "0.0.0.0:8080"]