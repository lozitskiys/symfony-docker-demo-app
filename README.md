### Install symfony

Create new directory, open it and then create project skeleton (according to https://symfony.com/doc/current/setup.html)

##### On Linux
```shell script
docker run --rm -v $(pwd):/app composer create-project symfony/website-skeleton src
```
##### On Windows
```shell script
docker run --rm -v %CD%:/app composer create-project symfony/website-skeleton src
```
