## Links
[API documentation](http://domain-name/docs)

### To start tests
````
cd to-project-root-dir
./vendor/bin/phpunit --testdox
````

### Tests for developers
````
cda
php artisan migrate:refresh
php artisan db:seed --class=Tests_Tags_Seeder (example of addiional seeder)
````
Single test:
````
test testIndexForSuperAdmin tests/Functional/API/v1/Tags2ControllerTest.php
````

### PHP linter for developers. Use locally
````
./vendor/bin/phpcs app/Models/TenantTag.php
````

To fix automatically:
````
./vendor/bin/phpcbf app/Models/TenantTag.php
````
## Create documentation
````
php artisan scribe:generate
````
