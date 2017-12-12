# SaaSsy
SaaS POC Laravel Project

# Basic Tools:
* Laradock - http://laradock.io/introduction/
* Laravel 5.5 - https://laravel.com/docs/5.5/installation
* Vue.js - https://laravel.com/docs/5.5/frontend
* Passport - https://laravel.com/docs/5.5/passport

# To Start Local Development Environment:
1. Go to your Laradock folder:
```
cp env-example .env
docker-compose up -d nginx mysql redis beanstalkd
```

2. Open the SaaSsy `.env` file and set the following: 
```
DB_HOST=mysql
REDIS_HOST=redis
QUEUE_HOST=beanstalkd
```

3. Open your browser and visit: 
`http://localhost`

# To Connect to MySQL 
Set the following in your SaaSsy `.env` file:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=default
DB_USERNAME=default
DB_PASSWORD=secret
```