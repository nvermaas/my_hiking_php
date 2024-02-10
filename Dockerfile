# Use Debian Bullseye as the base image
FROM debian:bullseye

# Install Apache, PHP 8.1, and other necessary packages
RUN apt-get update && \
    apt-get install -y --no-install-recommends \
        apache2 \
        php8.1 \
        libapache2-mod-php8.1 \
        php8.1-mysql \
        php8.1-zip \
        php8.1-gd \
        php8.1-xml \
        php8.1-mbstring \
        composer \
        && \
    rm -rf /var/lib/apt/lists/*

# Enable Apache modules
RUN a2enmod rewrite

# Set the working directory in the container
WORKDIR /var/www/html

# Copy your PHP project files into the container
COPY . .

# Install project dependencies using Composer
RUN composer install --no-scripts --no-autoloader

# Expose port 80 for Apache
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2ctl", "-D", "FOREGROUND"]