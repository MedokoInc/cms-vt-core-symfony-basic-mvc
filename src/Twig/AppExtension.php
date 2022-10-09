<?php

namespace App\Twig;

use App\Round;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

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

    public function getFunctions()
    {
        return [
            new TwigFunction('getWinner', [$this, 'getWinner']),
        ];
    }

    public function getWinner(array $rounds): string
    {
        $winner[] = $rounds[0]->getWinner();
        $winnercount[] = 0;
        foreach ($rounds as $round) {
            if(in_array($round->getWinner(), $winner)){
                $winnercount[array_search($round->getWinner(), $winner)]++;
            } else {
                $winner[] = $round->getWinner();
                $winnercount[] = 1;
            }
        }
        return $winner[array_search(max($winnercount), $winnercount)];
    }
}