FROM php:8.2-apache

# Copy project
COPY . /var/www/html/

WORKDIR /var/www/html/

# Enable rewrite module for Apache
RUN a2enmod rewrite

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
