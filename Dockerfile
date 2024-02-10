# Use an official PHP runtime as a parent image
FROM php:8.2-apache

# Set the working directory in the container
WORKDIR /var/www/html


# Install PHP extensions and other dependencies
RUN apt-get update && \
    apt-get install -y libpng-dev && \
    docker-php-ext-install pdo pdo_mysql gd && \
    # Install Composer
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    php -r "unlink('composer-setup.php');"

# Copy composer files and install dependencies
COPY composer.json composer.lock ./
RUN composer install --no-scripts --no-autoloader

# Copy your PHP application code into the container
COPY . .

# Expose the port Apache listens on
EXPOSE 80

# Start Apache when the container runs
CMD ["apache2-foreground"]