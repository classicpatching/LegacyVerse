FROM php:8.2-apache

# Install dependencies for MongoDB extension and Composer
RUN apt-get update && apt-get install -y \
        libssl-dev \
        pkg-config \
        unzip \
        git \
    && pecl install mongodb \
    && docker-php-ext-enable mongodb \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && apt-get clean

# Copy project files
COPY . /var/www/html/

WORKDIR /var/www/html/

# Enable Apache rewrite module
RUN a2enmod rewrite

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
