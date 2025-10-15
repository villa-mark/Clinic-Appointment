# Use official PHP image with Apache
FROM php:8.2-apache

# Install necessary PHP extensions for MySQL and common web apps
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli

# Enable Apache mod_rewrite (useful for routing and .htaccess)
RUN a2enmod rewrite

# Copy the current project files into the container’s web directory
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Give proper permissions
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Expose HTTP and HTTPS ports
EXPOSE 80 443
