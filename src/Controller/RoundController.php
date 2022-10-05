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
    public function index(string $round, DataGenerator $dataGenerator): Response
    {
        $rounds = $dataGenerator->generateData();
        return $this->render('allRounds.html', ['rounds'=>$rounds,'id'=>$round]);
    }
    //php bin/console debug:autowiring
}