FROM php:alpine3.12

COPY ./resque-receiver.php /app/
COPY ./job.php /app/
COPY ./vendor/ /app/vendor/

ENV REDIS_BACKEND redis:6379
ENV QUEUE default

CMD ["php", "/app/resque-receiver.php"]