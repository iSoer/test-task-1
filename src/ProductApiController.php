<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ProductApiController extends AbstractController
{
    /**
     * @Route("/api/products", name="api_products", methods={"GET"})
     */
    public function getProducts(): JsonResponse
    {
        // Mock data for products
        $products = [
            [
                'id' => 1,
                'name' => 'Laptop#12',
                'price' => 999.99,
                'description' => 'A high-performance laptop ideal for professionals and gamers.'
            ],
            [
                'id' => 2,
                'name' => 'Smartphone#2',
                'price' => 499.99,
                'description' => 'An advanced smartphone with the latest features and a sleek design.'
            ],
            [
                'id' => 3,
                'name' => 'Smartphone#12',
                'price' => 399.99,
                'description' => 'An advanced smartphone with the latest features and a mediocre design.'
            ],
            [
                'id' => 4,
                'name' => 'Headphones#22',
                'price' => 199.99,
                'description' => 'Noise-cancelling headphones with superior sound quality and comfort.'
            ],
        ];

        return $this->json($products);
    }

    /**
     * @Route("/api/products/{id}", name="api_product_detail", methods={"GET"})
     */
    public function getProductDetail(int $id): JsonResponse
    {
        // Mock data for a single product detail
        $productDetail = [
            'id' => $id,
            'name' => 'Product ' . $id,
            'price' => 149.99,
            'description' => 'Detailed description of product ' . $id,
            'additionalInfo' => 'More info about product ' . $id,
            // ... more details
        ];

        return $this->json($productDetail);
    }

    /**
     * @Route("/api/products", name="api_product_detail", methods={"POST"})
     */
    public function createProduct(Request $request): JsonResponse
    {
        // Some code inside
        $jsonData = json_decode($request->getContent(), true);

        $jsonData['name']; // String, required
        $jsonData['description']; // String, required
        $jsonData['price']; // String, required


        return;  // --> Frontend is waiting for the full list of products
    }
}

