FROM php:alpine3.12

COPY ./resque-sender.php /app/
COPY ./vendor/ /app/vendor/

ENV REDIS_BACKEND redis:6379
ENV QUEUE default

CMD ["php", "/app/resque-sender.php"]