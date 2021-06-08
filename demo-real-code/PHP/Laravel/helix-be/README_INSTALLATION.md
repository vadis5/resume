# Short manual to install this project locally
## Requirements
+ JIRA account for this project
+ BitBucket account for this project
+ CLI (so-called "terminal")
+ PHP 7.4
+ MySql

## Step 1. JIRA
+ open your account for this project
+ open your task
+ click on a link "Create branch" (task properties, field "Development")
+ you will move on a page "Create branch"

## Step 2. BitBucket
+ check fields. Must be:
    + Repository: helix-resilience/helix-cms
    + Type: Feature
    + From branch: develop
    + Branch name: will be formed automatically (don't change it, please)
+ click on a button "Create"  
    + you will be moved on a next page
+ copy the last row of the main body text, it will be shown like    
````
git fetch && git checkout feature/{your_branch_name}
````

## Step 3. Your local terminal (CLI). Git tasks
+ insert copied command (see last raw of the previous section) in your terminal and execute it
+ check git branch where you are: ```` git status ````
    + you must be in the branch feature/{your_branch_name}

## Step 4. Your local terminal (CLI). Local installation
+ go into the project root: ```cd {path_to_root}```
+ install the project dependencies: ```composer install```
+ check your computer according to official Laravel requirements:
    + PHP extensions
    + directory permissions
+ create mySQL DBs: hel as main DB, hel-test for tests.

## Step 5. Setup .env
+ Create .env
+ Edit this part in it:
````
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hel
````

## Step 6. Setup .env.testing
+ Create .env.testing
+ Edit this part in it:
````
DB_CONNECTION=testing
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hel-test
````
## Step 7. Your local terminal (CLI). Local installation. Part 2
+ install migrations ```php artisan migrate:refresh```
+ install seeds ```php artisan db:seed```
+ create:
    + storage link
    + APP_KEY.
    
## Step 8. Test
Execute ```./vendor/bin/phpunit --testdox```

## Step 9. Create API documentation
````
php artisan scribe:generate
````

