# Gunakan image PHP dengan Apache
FROM php:7.4-apache

# Install extensions yang diperlukan
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Aktifkan mod_rewrite
RUN a2enmod rewrite

# Salin file CodeIgniter ke dalam container
COPY . /var/www/html

# Berikan izin pada folder
RUN chown -R www-data:www-data /var/www/html
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf