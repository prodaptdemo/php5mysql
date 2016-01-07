FROM php:5.6-apache
COPY src/ /var/www/html/
COPY start.sh /
RUN source /start.sh
