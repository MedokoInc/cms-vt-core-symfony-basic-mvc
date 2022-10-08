<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('TimeToSpeed', [$this, 'TimeToSpeed']),
        ];
    }

    public function TimeToSpeed($value, float $distance, bool $switch): string
    {
        if ($switch) {
            $value = $value /1000;
            $unit = 'm/s';
            return $distance / $value.$unit;

        } else {
            $unit = 'ms';
            return $value.$unit;
        }
    }
}