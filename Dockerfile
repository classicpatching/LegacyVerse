# Use official PHP + Apache image
FROM php:8.2-apache

# Copy all project files to the web directory
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Enable Apache rewrite module (optional, good for clean URLs)
RUN a2enmod rewrite

# Disable DirectorySlash to prevent redirect problems
RUN echo "DirectorySlash Off" >> /etc/apache2/apache2.conf

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html

# Expose default web port
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
