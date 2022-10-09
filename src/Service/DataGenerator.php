<?php
namespace App\Service;

 use App\Peew;
 use App\Round;

 class DataGenerator
 {
        public function generateData(): array{
            $peews1[] = new Peew('Player 1', 1, 500, 'P-Modell', '12.09.2022');
            $peews1[] = new Peew('Player 2', 10, 5000, 'Dart', '10.09.2022');
            $peews1[] = new Peew('Player 3', 100, 50000, 'Corvin', '12.09.2022');

            $peews2[] = new Peew('Player 1', 30, 18232, 'Corvin', '12.09.2022');
            $peews2[] = new Peew('Player 2', 300, 45672, 'Corvin', '12.09.2022');
            $peews2[] = new Peew('Player 3', 30, 11625, 'Corvin', '12.09.2022');

            $peews3[] = new Peew('Player 2', 600, 656458, 'Corvin', '12.09.2022');
            $peews3[] = new Peew('Player 3', 100, 56152, 'Corvin', '12.09.2022');
            $rounds = [new Round($peews1,1),new Round($peews2,2),new Round($peews3,3)];

            return $rounds;
        }
 }