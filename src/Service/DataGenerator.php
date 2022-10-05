<?php
namespace App\Service;

 use App\Peew;
 use App\Round;

 class DataGenerator
 {
        public function generateData(): array{
            $peews1[] = new Peew('Player 1', '1m ', '500ms ', 'P-Modell', '12.09.2022 ');
            $peews1[] = new Peew('Player 2', '10m ', '5000ms ', 'Dart', '10.09.2022 ');
            $peews1[] = new Peew('Player 3', '100m ', '50000ms ', 'Corvin', '12.09.2022 ');

            $peews2[] = new Peew('Player 1', '30m ', '18232ms ', 'Corvin', '12.09.2022 ');
            $peews2[] = new Peew('Player 2', '300m ', '45672ms', 'Corvin', '12.09.2022 ');
            $peews2[] = new Peew('Player 3', '30m ', '11625ms ', 'Corvin', '12.09.2022 ');

            $peews3[] = new Peew('Player 2', '600m ', '656458ms ', 'Corvin', '12.09.2022 ');
            $peews3[] = new Peew('Player 3', '100m ', '56152ms ', 'Corvin', '12.09.2022 ');
            $rounds = [new Round($peews1,1),new Round($peews2,2),new Round($peews3,3)];

            return $rounds;
        }
 }