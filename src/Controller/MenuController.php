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
        $pizzaInfo = Array(
            "pizza" => Array(
                Array(
                    "name" => "Pepperoni",
                    "price_sm" => 10,
                    "price_md" => 15,
                    "price_lg" => 20,
                    "price_xl" => 25,
                ),
                Array(
                    "name" => "Other",
                    "price_sm" => 10,
                    "price_md" => 15,
                    "price_lg" => 20,
                    "price_xl" => 25,
                )
            )
        );


        return $this->render('views/menu/menu.html.twig',[
            'pizza_info' => $pizzaInfo
        ]);
    }
}
?>