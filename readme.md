# Powerfull Lumen 5.5 base project for all databases

Simple Lumen 5.5 base project with:
- Docker;
- Alpine; 
- PHP FPM 7.1;
- PDO drivers for MySQL, SQL Server, PostgreSQL, SQLite and MongoDB;
- OCI8 driver for Oracle;
- Lumen 5.5 with: Swagger UI, Cors, Eloquent for all cited databases;
- Supervisor running nginx, php, lumen queue workers, crond for lumen schedules;

This project uses "jgcl88/alpine-nginx-php:latest" availble in:
- Docker Hub - [https://hub.docker.com/r/jgcl88/alpine-nginx-php/](https://hub.docker.com/r/jgcl88/alpine-nginx-php/)
- Github - [https://github.com/jgcl/docker-alpine-nginx-php](https://github.com/jgcl/docker-alpine-nginx-php)

## Deploy (see [docker-compose.yml](docker-compose.yml)) 

```sh
docker-compose up -d
```

## Deploy with Oracle support (see [docker-compose-oracle.yml](docker-compose-oracle.yml)) 

```sh
docker-compose -f docker-compose-oracle.yml up -d
```

## Next steps

- Include Beanstealk container; 
- Include Beanstealk web console container; 
- Include Redis container; 
- Create php and circleci tests;
- Include jwt;