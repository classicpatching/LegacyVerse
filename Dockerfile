FROM ubuntu:22.04

ENV DEBIAN_FRONTEND=noninteractive

# Install Apache, PHP, and Mono with Apache module
RUN apt-get update && \
    apt-get install -y software-properties-common ca-certificates apt-transport-https gnupg curl && \
    add-apt-repository ppa:ondrej/php && \
    apt-get update && \
    apt-get install -y apache2 php8.2 libapache2-mod-php8.2 mono-complete libapache2-mod-mono && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

# Copy site files
COPY . /var/www/html/

# Enable required modules
RUN a2enmod rewrite && a2enmod mod_mono_auto

# Permissions
RUN chown -R www-data:www-data /var/www/html

# Set working directory
WORKDIR /var/www/html

EXPOSE 80

# Start Apache
CMD ["apache2ctl", "-D", "FOREGROUND"]
