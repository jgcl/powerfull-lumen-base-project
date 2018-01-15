FROM jgcl88/alpine-nginx-php

COPY ./application /app

WORKDIR /app

RUN composer install

EXPOSE 80

CMD ["/docker/start.sh"]