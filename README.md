# seeme
SeeMe SMS gateway, without dependency.

cURL php library is required:
```sh
sudo apt-get install php5-curl
```
Installation:
```sh
composer require tsamu/seeme 
```
PHP example:
```php
use SeeMe\SeeMeGateway;
require 'vendor/autoload.php';
$SeeMe = new SeeMeGateway('API_KEY');
$SeeMe->sendSMS('mobilenumber','message');

```

More information: https://seeme.hu/tudastar/reszletek/sms-gateway-php-class
