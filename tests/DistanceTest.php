<?php

use RFHaversini\Distance;

class DistanceTest extends PHPUnit_Framework_TestCase {

  /*
   * Calculate distance from Rio de Janeiro to São Paulo
   * Rio: -22.906847, -43.172896
   * São Paulo: -23.550520, -46.633309
   */

  public function testToKilometers() {
    $result = Distance::toKilometers(-22.906847, -43.172896, -23.550520, -46.633309);

    $this->assertEquals($result, 361);
  } 

  public function testToMiles() {
    $result = Distance::toMiles(-22.906847, -43.172896, -23.550520, -46.633309);

    $this->assertEquals($result, 224);
  } 
}
