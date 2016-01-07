FROM tutum/apache-php
COPY src/ /var/www/html/
COPY start.sh /
RUN /usr/sbin/apache2ctl -D FOREGROUND
