FROM jgcl88/alpine-php-nginx

COPY ./application /app

WORKDIR /app

RUN composer install

EXPOSE 80

CMD ["/docker/start.sh"]