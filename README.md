# Payment Gateway using MVC Framework in PHP.
Prerequisites: Lamp stack must be installed beforehand and functional phpmyadmin.

 Clone this repository by `git clone https://github.com/neerav1234/easypay`
 `cd PaymentGateway`
 
 
1. Install composer using:
    ```console
     curl -s https://getcomposer.org/installer | php
     sudo mv composer.phar /usr/local/bin/composer
    ```

1. Install dependencies and dump-autoload:
    ```console
     composer install
     composer dump-autoload
    ```

1. Copy `config/sample.config.php` as `config/config.php` and edit it accordingly:
    ```console
     cp config/sample.config.php config/config.php
    # Edit the file using your mysql database credentials
    ```

1. Import schema present in `schema/schema.sql` in your database using phpmyadmin.

1. Serve the public folder at any port (say 8000):
    ```console
	   cd public
     php -S localhost:8000
    ```
