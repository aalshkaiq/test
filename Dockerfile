FROM php:8.2-apache

# نسخ الملفات إلى السيرفر
COPY . /var/www/html/

# تفعيل Apache
EXPOSE 80
