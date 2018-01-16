FROM jgcl88/alpine-nginx-php:oracle

COPY ./application /app

WORKDIR /app

RUN composer install

EXPOSE 80

CMD ["/docker/start.sh"]