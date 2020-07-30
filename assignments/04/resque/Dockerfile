FROM php:alpine3.12

WORKDIR /app

COPY ./message.php resque-receiver.php ./composer.json ./composer.lock ./

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

RUN composer install

CMD ["php", "/app/resque-receiver.php"]