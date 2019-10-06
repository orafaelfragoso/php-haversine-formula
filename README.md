# php-haversini-formula [![Build Status](https://travis-ci.org/orafaelfragoso/php-haversine-formula.svg?branch=master)](https://travis-ci.org/orafaelfragoso/php-haversine-formula)

Calculates de distance between two geocode points 📌🗺

## How to use it:

Install the library via Composer or clone the repo:

`composer install orafaelfragoso/php-haversini-formula`

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
