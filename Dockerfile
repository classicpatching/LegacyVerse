# Use Ubuntu 22.04 (Jammy) as base
FROM ubuntu:22.04

# Prevent interactive prompts
ENV DEBIAN_FRONTEND=noninteractive

# Install Apache, PHP, Mono, and XSP4
RUN apt-get update && \
    apt-get install -y software-properties-common ca-certificates apt-transport-https gnupg curl && \
    add-apt-repository ppa:ondrej/php && \
    apt-get update && \
    apt-get install -y apache2 php8.2 libapache2-mod-php8.2 mono-complete mono-xsp4 && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

# Copy your project
COPY . /var/www/html/

# Enable rewrite module
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html/

# Permissions
RUN chown -R www-data:www-data /var/www/html

# Expose both ports (80 = PHP, 8080 = ASP.NET)
EXPOSE 80 8080

# Start both servers
CMD service apache2 start && xsp4 --port=8080 --nonstop
