<?php

class ProductCreateController extends AbstractController
{
    /**
     * @Route("/products/create", name="product_create", methods={"POST"})
     */
    public function create(Request $request): Response
    {
        // Logic to handle the creation of a product
        // ...

        return $this->redirectToRoute('product_list');
    }
}
