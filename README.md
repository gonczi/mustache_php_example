# mustache_php_example
Simple mustache.php example project

The docker environment is based on https://semaphoreci.com/community/tutorials/dockerizing-a-php-application

For build and run the server: 
```
docker-compose up
```

The index page available at localhost's port 8000: http://127.0.0.1:8000

Fro cleaning up everything: press CTRL+C and:

```
docker rm mustache_example_webapp_1
docker rmi mustache_example_webapp_1
```
