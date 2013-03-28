#World Distance

This PHP class can substitute the Google Distance Matrix to calculate the distance between two points using latitude and longitude. It will prevent you to do massive requests to Google and enhance your service performance.

## How to use it:

First you need to include the class, after that you can create the instance all get the distance between the points. See the example:

```php
<?php
include "worldDistance.php";

$distance = new worldDistance(30.261699, -97.738967, 29.869229, -97.959595);

print $distance->getDistance(); // KM is default
?>
```

If you want the measure in miles, you can do this:

```php
<?php
include "worldDistance.php";

$distance = new worldDistance(30.261699, -97.738967, 29.869229, -97.959595);
$distance->type = "miles"; // Change the measure to miles

print $distance->getDistance();
?>
```