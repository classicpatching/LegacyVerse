# Use an official PHP image with Apache
FROM php:8.2-apache

# Enable useful Apache mods
RUN docker-php-ext-install mysqli pdo pdo_mysql && a2enmod rewrite

# Copy your project files into the web root
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
