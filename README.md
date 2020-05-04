Using this repo you can run symfony PHP app in docker containers.

List of services:
1. Mariadb
2. Php-fpm
3. Nginx

### Instructions

1. Clone this repo and then delete .git folder.
2. Go to root repo dir and create project skeleton (according to https://symfony.com/doc/current/setup.html)

**On Linux**
```shell script
docker run --rm -v $(pwd):/app composer create-project symfony/website-skeleton app
```
**On Windows**
```shell script
docker run --rm -v %CD%:/app composer create-project symfony/website-skeleton app
```

Go to "docker" dir and run:
```shell script
docker-compose up -d
```

Open http://localhost/ and you are done.

Inspired by https://dev.to/martinpham/symfony-5-development-with-docker-4hj8