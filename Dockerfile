FROM php:8.2-apache

# Install required tools and add Mono repository (no apt-key)
RUN apt-get update && apt-get install -y gnupg ca-certificates curl apt-transport-https dirmngr && \
    mkdir -p /etc/apt/keyrings && \
    curl -fsSL https://download.mono-project.com/repo/xamarin.gpg | gpg --dearmor -o /etc/apt/keyrings/mono.gpg && \
    echo "deb [signed-by=/etc/apt/keyrings/mono.gpg] https://download.mono-project.com/repo/debian stable-jammy main" \
    > /etc/apt/sources.list.d/mono-official-stable.list && \
    apt-get update && apt-get install -y mono-complete mono-xsp4 && \
    rm -rf /var/lib/apt/lists/*

# Copy project files
COPY . /var/www/html/

# Enable Apache rewrite for PHP
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html/

# Fix permissions
RUN chown -R www-data:www-data /var/www/html

# Expose both ports
EXPOSE 80 8080

# Start both PHP (Apache) and ASPX (Mono)
CMD service apache2 start && xsp4 --port=8080 --nonstop
