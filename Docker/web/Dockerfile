#
# Web node
#
FROM docker.big.hu/development/nginx-php:5.6.30
MAINTAINER BIG FISH <cafe@bigfish.hu>

#
# Set Debian repository
#
RUN sed -i '/jessie-updates/d' /etc/apt/sources.list \
	&& echo "deb http://repo.big.hu/debian jessie-backports main" >> /etc/apt/sources.list \
	&& wget -qO - https://repo.big.hu/repo.big.hu.key | apt-key add -

#
# Install extra PHP modules
#
RUN apt-get update

RUN apt-get install -t jessie-bigfish -y \
    php5-memcached \
    php5-xsl=${PHP5_VERSION} \
    php5-xmlrpc=${PHP5_VERSION}

#
# PHP-FPM config
#
ADD ./src/php/www.conf /etc/php5/fpm/pool.d/www.conf

#
# PHP settings
#
ADD ./src/php/000-php-settings.ini /etc/php5/mods-available/000-php-settings.ini
RUN ln -s /etc/php5/mods-available/000-php-settings.ini /etc/php5/cli/conf.d/000-php-settings.ini
RUN ln -s /etc/php5/mods-available/000-php-settings.ini /etc/php5/fpm/conf.d/000-php-settings.ini

#
# Forward PHP error log to docker log collector
#
RUN ln -sf /dev/stdout /var/log/php_error.log

#
# Get composer
#
RUN cd /usr/local/bin \
    && wget -q https://getcomposer.org/download/1.1.3/composer.phar \
    && chmod ugo+rx composer.phar \
    && ln -s composer.phar composer

#
# Set www-data user
#
RUN usermod -s /bin/bash -d /home/www-data www-data

#
# Nginx config
#
RUN rm -Rf /etc/nginx/conf.d/*
ADD ./src/nginx/nginx.conf /etc/nginx/nginx.conf
ADD ./src/nginx/default.conf /etc/nginx/conf.d/default.conf

#
# Docroot
#
RUN mkdir -p /var/www/dev/paymentgateway-demo \
    && chown -R www-data:www-data /var/www/dev/paymentgateway-demo \
    && rm -rf /var/www/dev/paymentgateway-demo/*

VOLUME ["/var/www/dev/paymentgateway-demo"]