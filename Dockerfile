# Use an official PHP runtime as a parent image
FROM php:8.0-apache

# Set the working directory in the container
WORKDIR /var/www/html

## Add missing GPG keys
#RUN apt-get update && \
#    apt-get install -y gnupg && \
#    apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 0E98404D386FA1D9 && \
#    apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 6ED0E7B82643E131 && \
#    apt-key adv --keyserver keyserver.ubuntu.com --recv-keys F8D2585B8783D481 && \
#    apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 54404762BBB6E853 && \
#    apt-key adv --keyserver keyserver.ubuntu.com --recv-keys BDE6D2B9216EC7A8 && \
#    apt-get clean && \
#    rm -rf /var/lib/apt/lists/*


# Install PHP extensions and other dependencies
RUN apt-get update && \
    apt-get install -y libpng-dev && \
    docker-php-ext-install pdo pdo_mysql gd
    # Install Composer
    # php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    # php composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    #php -r "unlink('composer-setup.php');"

# Copy your PHP application code into the container
COPY . .

# Expose the port Apache listens on
EXPOSE 80

# Start Apache when the container runs
CMD ["apache2-foreground"]