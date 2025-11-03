# Gunakan image PHP bawaan
FROM php:8.2-apache

# Salin semua file project ke dalam server container
COPY . /var/www/html/

# Atur folder kerja
WORKDIR /var/www/html/

# Aktifkan ekstensi mysqli untuk MySQL
RUN docker-php-ext-install mysqli

# Jalankan server
EXPOSE 10000
CMD ["php", "-S", "0.0.0.0:10000", "-t", "."]
