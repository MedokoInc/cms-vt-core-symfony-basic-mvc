<?php

namespace App\Twig;

use App\Round;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;
use Twig\TwigTest;

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

    public function getTests()
    {

        return [
            new TwigTest('date', [$this, 'isDate']),
        ];
    }

    public function isDate($date): bool
    {
        if (preg_match("/^(0[1-9]|[1-2][0-9]|3[0-1]).(0[1-9]|1[0-2]).[0-9]{4}$/",$date)) {
            return true;
        } else {
            return false;
        }    }
}