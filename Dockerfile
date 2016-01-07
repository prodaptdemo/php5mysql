FROM tutum/apache-php
COPY src/ /var/www/html/
COPY start.sh /
RUN service apache2 start
