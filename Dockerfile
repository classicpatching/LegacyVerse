# Use PHP Apache base
FROM php:8.2-apache

# Add official Mono repository and install everything
RUN apt-get update && apt-get install -y gnupg ca-certificates apt-transport-https dirmngr && \
    apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv-keys 3FA7E0328081BFF6A14DA29AA6A19B38D3D831EF && \
    echo "deb https://download.mono-project.com/repo/debian stable-jammy main" | tee /etc/apt/sources.list.d/mono-official-stable.list && \
    apt-get update && \
    apt-get install -y mono-complete mono-xsp4 && \
    rm -rf /var/lib/apt/lists/*

# Copy project files
COPY . /var/www/html/

# Enable Apache rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html/

# Fix permissions
RUN chown -R www-data:www-data /var/www/html

# Expose both ports
EXPOSE 80 8080

# Start Apache (PHP) and XSP4 (ASPX)
CMD service apache2 start && xsp4 --port=8080 --nonstop
