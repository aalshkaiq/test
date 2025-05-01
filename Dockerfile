FROM php:8.2-cli

# تحميل إضافات PHP لو تحتاجها
RUN docker-php-ext-install curl

# نسخ ملفات البوت
COPY . /usr/src/app
WORKDIR /usr/src/app

# أمر تشغيل البوت بشكل دائم
CMD [ "php", "bot.php" ]
