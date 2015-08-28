#World Distance

This PHP class can replace the Google Distance Matrix to calculate the distance between two points using latitude and longitude. It will prevent you to do massive requests to Google's API and enhance your service's performance.

## How to use it:

Install the library via Composer or clone the repo:

`php composer.phar install rafaelfragoso/haversini-formula`

After the installation is complete, you can load the class and start using it.

```php
<?php

$inKilometers = Distance::toKilometers(30.261699, -97.738967, 29.869229, -97.959595);
$inMiles      = Distance::toMiles(30.261699, -97.738967, 29.869229, -97.959595);

```
