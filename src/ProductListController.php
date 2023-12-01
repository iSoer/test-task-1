<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductListController extends AbstractController
{
    /**
     * @Route("/products", name="product_list")
     */
    public function list(): Response
    {
        // Render the Twig template for product listing
        return $this->render('product/list.html.twig');
    }
}
