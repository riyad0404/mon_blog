# Use the official PHP image with Apache
FROM php:8.2-apache


# Install PDO MySQL extension and mysql-client
RUN apt-get update \
	&& apt-get install -y default-mysql-client \
	&& docker-php-ext-install pdo_mysql mysqli


# Copy app source code to the Apache document root
COPY . /var/www/html/

# Copy wait-for-mysql script
COPY wait-for-mysql.sh /wait-for-mysql.sh
RUN chmod +x /wait-for-mysql.sh

# Enable Apache mod_rewrite (if needed for routing)
RUN a2enmod rewrite

# Set permissions (optional, for dev)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80

# Use wait-for-mysql.sh as entrypoint to ensure MySQL is ready before Apache starts
ENTRYPOINT ["/wait-for-mysql.sh", "mysql"]
CMD ["apache2-foreground"]
