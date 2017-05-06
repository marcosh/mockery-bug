# INSTALL DEPENDENCIES

I used

```bash
docker run --rm -ti --volume "$(pwd):/app:rw" --user "$(id -u):$(id -g)" --dns 8.8.8.8 --env "COMPOSER_HOME=/tmp/composer" composer install
```

# TEST

I used

```bash
docker run --rm -i --volume "$(pwd):/app" --user "$(id -u):$(id -g)" prooph/php:7.1-cli php vendor/bin/phpunit
```