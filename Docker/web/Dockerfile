FROM alpine:3.12
MAINTAINER BIG FISH <cafe@bigfish.hu>

ENV PHP7_VERSION 7.3.22-r0

RUN set -ex \
  && addgroup -S www-data && adduser -S www-data -G www-data \
  && apk --no-cache add --update \
    tzdata \
    curl \
    nginx \
    php7=${PHP7_VERSION} \
    php7-common=${PHP7_VERSION} \
    php7-curl=${PHP7_VERSION} \
    php7-fpm=${PHP7_VERSION} \
    php7-iconv=${PHP7_VERSION} \
    php7-json=${PHP7_VERSION} \
    php7-mbstring=${PHP7_VERSION} \
    php7-opcache=${PHP7_VERSION} \
    php7-openssl=${PHP7_VERSION} \
    php7-phar=${PHP7_VERSION} \
    php7-xmlrpc=${PHP7_VERSION} \
    php7-xsl=${PHP7_VERSION} \
    php7-pecl-xdebug \
  && rm -rf /var/cache/apk/* \
  && cd /usr/local/bin \
  && curl -o composer https://getcomposer.org/composer-stable.phar \
  && chmod ugo+rx composer \
  && ln -sf /dev/stdout /var/log/php_error.log \
  && mkdir -p /var/www/dev \
  && rm -rf /var/www/dev/* \
  && chown -R www-data:www-data /var/www/dev \
  && chown -R www-data:www-data /var/log/php_error.log \
  && echo "zend_extension=xdebug.so" > /etc/php7/conf.d/xdebug.ini

ENV TZ=Europe/Budapest
RUN cp /usr/share/zoneinfo/${TZ} /etc/localtime
RUN echo "${TZ}" > /etc/timezone

WORKDIR "/var/www/dev"
