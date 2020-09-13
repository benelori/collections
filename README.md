# Reproduction repo for loophp/collection

## Usage

If there is local php installation, then just run

```
composer install
vendor/phpunit/phpunit/phpunit --no-configuration tests
```

Otherwise, there are a few recommended requirements:

1. Docker version 19.03.12, build 48a66213fe
2. docker-compose version 1.26.2, build eefe0d31
3. GNU Make 4.2.1

And then 
```shell script
make start
make back-install
make back-test
```
