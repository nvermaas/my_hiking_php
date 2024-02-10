# Use an official PHP 8.1 Apache image as a base
FROM php:8.1-apache

# Set the working directory in the container
WORKDIR /var/www/html
RUN apt-get update && \
    apt-get install -y gnupg && \
    apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 0E98404D386FA1D9 && \
    apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 6ED0E7B82643E131 && \
    apt-key adv --keyserver keyserver.ubuntu.com --recv-keys F8D2585B8783D481 && \
    apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 54404762BBB6E853 && \
    apt-key adv --keyserver keyserver.ubuntu.com --recv-keys BDE6D2B9216EC7A8 && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql zip

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy composer files and install dependencies
COPY composer.json composer.lock ./
RUN composer install --no-scripts --no-autoloader

# Copy the rest of your application code into the container
COPY . .

# Expose port 80 for Apache
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]