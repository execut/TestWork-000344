# Authors CRUD API based on Laravel and VUE
## Features
- [x] Authors CRUD API tests
- [x] Authors CRUD API
- [x] Authors CRUD VUE frontend
- [x] Traefik support
- [ ] Demo site [https://books-app.execut.co](https://books-app.execut.co)
- [ ] Books CRUD API tests
- [ ] Books CRUD API
- [ ] Books CRUD VUE frontend


## Usage
1. `git clone https://github.com/execut/TestWork-000344.git authors-crud`
1. `cd authors-crud`
1. Setup your `.env` file
1. Run application
    * For development environment: `./vendor/bin/sail -f docker-compose.yml -f docker-compose.dev.yml up`
    * For production with traefik, simple run: `./vendor/bin/sail up`
1. Open the address [http://localhost](http://localhost) and see the Authors CRUD:
![Authors CRUD](https://raw.githubusercontent.com/execut/TestWork-000344/master/docs/authors-CRUD.png)

## Tests
For tests, just run the command:
```
./vendor/bin/sail test
```
Results: 
![Tests results](https://raw.githubusercontent.com/execut/TestWork-000344/master/docs/tests-results.jpg)
