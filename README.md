By https://dev.to/martinpham/symfony-5-development-with-docker-4hj8

### Install symfony

Create new directory, open it and create project skeleton (according to https://symfony.com/doc/current/setup.html)

##### On Linux
```shell script
docker run --rm -v $(pwd):/app composer create-project symfony/website-skeleton src
```
##### On Windows
```shell script
docker run --rm -v %CD%:/app composer create-project symfony/website-skeleton src
```

### And then
```shell script
docker-compose up -d
```

Go to http://localhost/ and you are done.