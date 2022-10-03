<?php

namespace App\Controller;

use App\Round;
use App\Peew;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RoundController extends AbstractController
{
    #[Route('/results/{round}', name: 'single_round')]
    public function SingleRound(string $round): Response
    {
        $peews1[] = new Peew('Player 1', '1m ', '500ms ', 'P-Modell', '12.09.2022 ');
        $peews1[] = new Peew('Player 2', '10m ', '5000ms ', 'Dart', '10.09.2022 ');
        $peews1[] = new Peew('Player 3', '100m ', '50000ms ', 'Corvin', '12.09.2022 ');

        $peews2[] = new Peew('Player 4', '1000m ', '500000ms ', 'Corvin', '12.09.2022 ');
        $peews2[] = new Peew('Player 5', '10000m ', '5000000ms ', 'Corvin', '12.09.2022 ');
        $peews2[] = new Peew('Player 6', '100000m ', '50000000ms ', 'Corvin', '12.09.2022 ');

        $peews3[] = new Peew('Player 7', '1000000m ', '500000000ms ', 'Corvin', '12.09.2022 ');
        $peews3[] = new Peew('Player 8', '10000000m ', '5000000000ms ', 'Corvin', '12.09.2022 ');
        $rounds = ['1'=>new Round($peews1),'2'=> new Round($peews2),3=> new Round($peews3)];

        return $this->render('singleRound.html', ['peews'=>$rounds[$round]->getPeews()]);
    }
    //php bin/console debug:autowiring

    #[Route('/results', name: 'all_rounds')]
    public function AllRounds(): Response
    {
        $peews1[] = new Peew('Player 1', '1m ', '500ms ', 'P-Modell', '12.09.2022 ');
        $peews1[] = new Peew('Player 2', '10m ', '5000ms ', 'Dart', '10.09.2022 ');
        $peews1[] = new Peew('Player 3', '100m ', '50000ms ', 'Corvin', '12.09.2022 ');

        $peews2[] = new Peew('Player 4', '1000m ', '500000ms ', 'Corvin', '12.09.2022 ');
        $peews2[] = new Peew('Player 5', '10000m ', '5000000ms ', 'Corvin', '12.09.2022 ');
        $peews2[] = new Peew('Player 6', '100000m ', '50000000ms ', 'Corvin', '12.09.2022 ');

        $peews3[] = new Peew('Player 7', '1000000m ', '500000000ms ', 'Corvin', '12.09.2022 ');
        $peews3[] = new Peew('Player 8', '10000000m ', '5000000000ms ', 'Corvin', '12.09.2022 ');
        $rounds = [1=>new Round($peews1),2=> new Round($peews2),3=> new Round($peews3)];

        return $this->render('allRounds.html', ['rounds'=>$rounds]);
    }
}