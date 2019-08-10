# Application with checkout transparent PagSeguro

Please note this repository contains only the creation of a simple transaction in PagSeguro using transparent Credit Card checkout. You might want to check out the official (https://github.com/pagseguro/pagseguro-php-sdk) integration SDK.

### Installation
```
$ git clone https://github.com/developerantoniosousa/example-pagseguro-checkout-transparent.git
$ composer install
```

You must access (or create a new account) the PagSeguro Sandbox (https://sandbox.pagseguro.uol.com.br/) to get the API credentials. Open the init.php file and look for the constant PAGSEGURO_CREDENTIALS, apply the values ​​according to your account.

Now just access the location of the application. After, if you access the PagSeguro Sandbox in transactions you will see that there is something there.