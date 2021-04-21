# Authors CRUD API based on Laravel and VUE
## Features
- [x] Authors CRUD API tests
- [x] Authors CRUD API
- [x] Authors CRUD VUE frontend
- [x] Traefik support
- [x] Letsencrypt ssl-certificates
- [x] Demo site [https://books-app.execut.co](https://books-app.execut.co)
- [x] Authentication


## Usage
1. `git clone https://github.com/execut/TestWork-000344.git books-app`
1. `cd books-app`
1. `composer install`
1. Create a copy of your .env file: `cp .env.example .env` and setup normal passwords inside
1. Generate your encryption key: `php artisan key:generate`
1. Migrate DB: `php artisan migrate`
1. Run application
    * For development environment: `./vendor/bin/sail -f docker-compose.yml -f docker-compose.dev.yml up`
    * For production with traefik, simple run: `./vendor/bin/sail up`
1. Open the address from APP_URL directive, e.g. [https://books-app.execut.co](https://books-app.execut.co).
   Here you should see the main page:
![Main page](https://raw.githubusercontent.com/execut/TestWork-000344/master/docs/main-page.png)
1. Register by the top right "Register" link [/register](https://books-app.execut.co/register)
1. After registration you will go to the dashboard
   ![Dashboard](https://raw.githubusercontent.com/execut/TestWork-000344/master/docs/dashboard.png)
1. Through the menu, you can go to the author's admin panel and manage them there:
   ![crud.png](https://raw.githubusercontent.com/execut/TestWork-000344/master/docs/crud.png)
## Tests
For tests, just run the command:
```
./vendor/bin/sail test
```
Results: 
![Tests results](https://raw.githubusercontent.com/execut/TestWork-000344/master/docs/tests-results.jpg)
