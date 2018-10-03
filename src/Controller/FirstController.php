<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
class FirstController extends AbstractController
{
    /**
     * @Route("/first", name="first")
     */
    public function index()
    {
        return $this->render('first/index.html.twig', [
            'controller_name' => 'FirstController',
        ]);
    }
    /**
     * @Route("/", name="Accueil")
     */
    public function accueilAction(){
        // render the view
        return $this->render('first/accueil.html.twig');
    }
    /**
     * @Route("/lulu", name="third")
     */
    public function thirdAction(){
        // render the view
        return $this->render('first/third.html.twig');
    }
}
