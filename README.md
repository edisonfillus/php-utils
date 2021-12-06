# php-utils

## Running

### Install composer
see [https://getcomposer.org/download/](https://getcomposer.org/download/)
```shell
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

### Install dependencies
```shell
php composer.phar install
```

### Useful functions

#### Run server locally
```shell
php -S localhost:8000
```

#### Run as command line script
```injectablephp
ignore_user_abort(true); // Ignore user aborts 
set_time_limit(0); // Allow the script to run forever
```

#### Encripting and Validating passwords
```injectablephp
$password = 'rawpass';
$encrypted = password_hash($password, PASSWORD_DEFAULT);
$result = password_verify($password, $encrypted);
```

#### Sanitize and validate input
```injectablephp
$value = " -1";
$result = filter_var($value, FILTER_VALIDATE_INT);
if(is_int($result)){
    echo 'validated'.PHP_EOL;
}
var_dump($result);
```

#### Cookies
```injectablephp
setcookie("TestCookie", $value, time()+3600);  /* expire in 1 hour */
echo $_COOKIE["TestCookie"]; // Reading in next request
```

