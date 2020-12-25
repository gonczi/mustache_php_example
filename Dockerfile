FROM php:7-apache
#MAINTAINER YOUR_EMAIL_OR_ORGANIZATION

# Setup Apache2 config
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

# use your users $UID and $GID below
RUN groupadd apache-www-volume -g 1000
RUN useradd apache-www-volume -u 1000 -g 1000

# git clone bobthecow/mustache.php
RUN apt-get update
RUN apt-get install git -y
RUN mkdir /var/www/lib; cd /var/www/lib; git clone https://github.com/bobthecow/mustache.php.git
RUN cd /var/www/lib/mustache.php; php bin/build_bootstrap.php

CMD ["apache2-foreground"]