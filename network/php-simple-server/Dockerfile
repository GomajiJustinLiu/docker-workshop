FROM php:alpine3.12

# 設定label
LABEL maintainer="Justin"

# 執行命令
RUN apk --update add curl unzip

# COPY本機檔案到Image
COPY ./redis-set.php ./redis-get.php ./simple-twig.php ./composer.json ./composer.lock /var/www/html/
COPY ./templates/ /var/www/html/templates/
RUN ls -al /var/www/html/

# Container執行時的環境變數
ENV NAME=Justin

# 執行指令，下載composer並進行安裝
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

# 切換工作目錄到/var/www/html
WORKDIR /var/www/html

# 執行命令composer install安裝dependency
RUN composer install

# 宣高Container執行時對外開放的Port
EXPOSE 8080

# Container啟動後的執行指令
CMD ["php", "-S", "0.0.0.0:8080"]