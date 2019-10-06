<?php

namespace Haversini;

use UnitConverter\UnitConverter;

class Haversini
{

    /**
     * @var int
     */
    protected static $earth_radius = 6371000;

    /**
     * @param float $fromLatitude
     * @param float $fromLongitude
     * @param float $toLatitude
     * @param float $toLongitude
     * @param string $unit
     *
     * @return float
     */
    public static function calculate(
        float $fromLatitude,
        float $fromLongitude,
        float $toLatitude,
        float $toLongitude,
        string $unit = 'km'
    ): float {
        $latitudeRadian = deg2rad($toLatitude - $fromLatitude);
        $longitudeRadian = deg2rad($toLongitude - $fromLongitude);

        $a = sin($latitudeRadian / 2)
            * sin($latitudeRadian / 2)
            + cos(deg2rad($fromLatitude))
            * cos(deg2rad($toLatitude))
            * sin($longitudeRadian / 2)
            * sin($longitudeRadian / 2);

        return static::converter(
            static::$earth_radius * (2 * asin(sqrt($a))), $unit
        );
    }

    /**
     * @param float $distance
     * @param string $unit
     *
     * @return float
     */
    protected static function converter(float $distance, string $unit): float
    {
        return (float) (UnitConverter::default())
            ->convert($distance)
            ->from('m')
            ->to($unit);
    }
}
