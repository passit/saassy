# SaaSsy
SaaS POC Laravel Project

# Basic Tools:
* Laradock - http://laradock.io/introduction/
* Laravel 5.5 - https://laravel.com/docs/5.5/installation
* Vue.js - https://laravel.com/docs/5.5/frontend
* Passport - https://laravel.com/docs/5.5/passport

# To Start Local Development Environment:
1. Go to your Laradock folder:
> cp env-example .env
> docker-compose up -d nginx mysql redis beanstalkd

1. Open the SaaSsy .env file and set the following: 
> DB_HOST=mysql
> REDIS_HOST=redis
> QUEUE_HOST=beanstalkd

1. Open your browser and visit: 
> http://localhost