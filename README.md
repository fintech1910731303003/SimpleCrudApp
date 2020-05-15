# Simple CRUD App connect to MySQL with PHP

### Mysql
first login to mysql and create database.
~~~sql
CREATE DATABASE fintech;
~~~

### Database connection
In `config.php` connect with database by instantiatin
```PHP
$host = "127.0.0.1";
$db = "fintech";
$username = "root";
$passwd = "";
$dns = "mysql:host=$host;dbname=$db";
$options = [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION];
```

