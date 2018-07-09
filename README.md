# laracasts
Learning Laravel: Podcast Laravel 5.4 From Scratch

####E01_Laravel_Installation_and_Composer:

- Install Composer according to the documantation on the website
- Making Composer available globally 
- Install the Laravel-Installer
- Use the command "laravel new blog" to install the latest version of laravel and create a project named "blog"

 
####E02_Basic_Routing_and_Views:
 
 - The console command "php artisan serve" starts laravels build-in webserver
 - Routes are located in /routes/web.php
 - When registering a route the file suffix ".blade.php" is not required
 - Views are located in /resources/views


####E04_Database_Setup_and_Sequel_Pro:

In the File ".env" in the root directory is a single secure place to store keys and passwords. Here we can specify our database connection. For each environment (dev/prod) there will be a separate env-file.

- Define a system variable (Path: C:\xampp\mysql\bin) in Windows to make the command "mysql" available globally
- Get access to databases with the command "start mysql -uusername -ppassword" on Git-Bash. A separate window with a mysql prompt will open.

#####Mysql:
- Run "create database blog;" to create the database blog
- With "use blog;" you can specify that the following command will use the named database
- The command "show tables;" will list all tables of that database

#####Artisan:
- The command "php artisan migrate" will run the migrations located in /database/migrations
!!! If you are running an older version than MySQL v5.7.7 put the following lines to the AppServiceProvider.php to prevent a DB-Exception:
use Illuminate\Support\Facades\Schema;

public function boot()
{
    Schema::defaultStringLength(191);
}

####E05_Pass_Data_to_Your_Views:

- Second parameter af global function "view" can be used to specify variables (keys of an associative array) which will be available in the view.
- Use the PHP-own function "compact" to pack variables of the actual scope in an array.
- Every PHP template directive and condition can be replaced by the Blade template equivalent e.g. @if() instead of <?= if(): ?>

####E06_Working_With_the_Query_Builder

#####Artisan:
- "php artisan" shows all artisan commands
- the section with the "make" commands can be recognized as file generating commands
- with the command "php artisan help name_of_command" you can get info a specific command e.g. php artisan help make:controller
- use "php artisan migrate:refresh" to rollback and rerun all migrations
