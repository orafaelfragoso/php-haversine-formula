<?php

use Haversini\Haversini;

class DistanceTest extends \PHPUnit\Framework\TestCase
{

    /*
     * Calculate distance from Rio de Janeiro to São Paulo
     * Rio: -22.906847, -43.172896
     * São Paulo: -23.550520, -46.633309
     */

    public function testToKilometers()
    {
        $distance = Haversini::calculate(
            -22.906847,
            -43.172896,
            -23.550520,
            -46.633309
        );

        $this->assertEquals(360.75, $distance);
    }

    public function testToMiles()
    {
        $distance = Haversini::calculate(
            -22.906847,
            -43.172896,
            -23.550520,
            -46.633309,
            'mi'
        );

        $this->assertEquals(224.16, $distance);
    }
}
