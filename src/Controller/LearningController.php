<?php

namespace App\Controller;

use phpDocumentor\Reflection\Types\This;
use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    public string $name = "Unknown";

        
    #[Route('/learning', name: 'learning')]
    public function index(): Response
    {
        return $this->render('learning/index.html.twig', [
            'controller_name' => 'LearningController',
        ]);
    }

    #[Route('/about-becode', name: 'about-me')]
    public function aboutMe(): Response
    {
        if (!isset($_SESSION['userName'])){
           return $this->redirectToRoute("homePage");
        }

        return $this->render('learning/aboutMe.html.twig', [
            'controller_name' => 'LearningController',
            'name' => $_SESSION['userName']?? "Unknown"
        ]);

    }

    #[Route('/', name: 'homePage')]
    public function showMyName(): Response
    {
        if (isset($_POST["forgetMe"])){
            session_unset();
        }

        return $this->render('learning/showMyName.html.twig', [
            'name' => $_SESSION['userName']?? "Unknown",
        ]);
    }

    #[Route('/change-my-name', name: 'change-my-name')]
    public function changeMyName(): Response
    {
        if (!empty($_POST["inputName"])){
            $_SESSION['userName'] = $_POST["inputName"];

        }
        return $this->redirectToRoute("homePage");

    }

}
