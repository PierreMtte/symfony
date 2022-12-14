<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/lucky')]
class LuckyController extends AbstractController
{
    #[Route('/number/{max}')]
    public function number(int $max): Response
    {
        $number = random_int(0, $max);
        
        return $this->render('lucky/number.html.twig', ['number' => $number]);
    }
}