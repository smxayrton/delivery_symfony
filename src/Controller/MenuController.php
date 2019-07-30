<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MenuController extends AbstractController{
    
    /**
    * @Route("/menu/pizzas")
    */
    public function pizzas()
    {
        return $this->render('views/menu/menu.html.twig');
    }
}
?>