# Use official PHP + Apache image
FROM php:8.2-apache

# Copy project files
COPY . /var/www/html/

# Disable directory slash redirect and allow clean PHP execution
RUN a2enmod rewrite
RUN echo "<Directory /var/www/html>\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>\n\
DirectorySlash Off" > /etc/apache2/conf-available/legacyverse.conf && \
    a2enconf legacyverse

# Set working directory
WORKDIR /var/www/html

# Expose web port
EXPOSE 80

CMD ["apache2-foreground"]
