# World Distance

This PHP class can replace the Google Distance Matrix to calculate the distance between two points using latitude and longitude. It will prevent you to do massive requests to Google's API and enhance your service's performance.

## How to use it:

Install the library via Composer or clone the repo:

`composer install rafaelfragoso/haversini-formula`

After the installation is complete, you can load the class and start using it.

```php
<?php

use Haversini\Haversini;

/*
 * Calculate distance from Rio de Janeiro to São Paulo
 * Rio: -22.906847, -43.172896
 * São Paulo: -23.550520, -46.633309
 */
Haversini::calculate(
    -22.906847,
    -43.172896,
    -23.550520,
    -46.633309,
    'mi' // Output length unit
);
```

## Running tests

`make test` or `make test-coverage`

XDebug is required for test coverage!

## Authors

- [Rafael Fragoso](https://github.com/ofragoso) - *Initial work*
- [Leonardo Carmo](https://github.com/leocarmo) - *Version 2*

See also the list of [contributors](https://github.com/orafaelfragoso/php-haversine-formula/graphs/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details