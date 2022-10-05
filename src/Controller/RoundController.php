<?php

namespace App\Controller;

use App\Round;
use App\Peew;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\DataGenerator;

class RoundController extends AbstractController
{
    #[Route('/results/{round}', name: 'single_round')]
    public function SingleRound(string $round, DataGenerator $dataGenerator): Response
    {
        $rounds = $dataGenerator->generateData();

        return $this->render('singleRound.html', ['peews'=>$rounds[$round-1]->getPeews(), 'id'=>$rounds[$round-1]->getId()]);
    }
    //php bin/console debug:autowiring

    #[Route('/results', name: 'all_rounds')]
    public function AllRounds(DataGenerator $dataGenerator): Response
    {
        $rounds = $dataGenerator->generateData();

        return $this->render('allRounds.html', ['rounds'=>$rounds]);
    }
}