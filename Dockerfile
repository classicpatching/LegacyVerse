FROM php:8.2-apache

# Install extensions (optional)
RUN docker-php-ext-install mysqli pdo pdo_mysql && a2enmod rewrite

# Copy all files into Apache web directory
COPY . /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html

WORKDIR /var/www/html/

EXPOSE 80
CMD ["apache2-foreground"]
