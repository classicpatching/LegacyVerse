# Start from PHP Apache image (for PHP support)
FROM php:8.2-apache

# Install Mono and ASP.NET web server (xsp4)
RUN apt-get update && \
    apt-get install -y mono-complete mono-xsp4 && \
    rm -rf /var/lib/apt/lists/*

# Copy project files
COPY . /var/www/html/

# Enable Apache rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html/

# Permissions
RUN chown -R www-data:www-data /var/www/html

# Expose both ports: 80 (Apache/PHP) and 8080 (Mono/ASPX)
EXPOSE 80 8080

# Start Apache + Mono server together
CMD service apache2 start && xsp4 --port=8080 --nonstop
