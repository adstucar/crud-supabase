FROM php:8.2-apache
# Instala la extensión PDO necesaria para conectar a PostgreSQL
RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pdo pdo_pgsql
COPY . /var/www/html/
EXPOSE 80