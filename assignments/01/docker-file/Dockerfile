FROM php:alpine3.12

WORKDIR /app
COPY . .

ENV NAME docker-workshop

EXPOSE 80

CMD ["php", "-S", "0.0.0.0:80", "-t", "/app"]
