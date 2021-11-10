<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/products", name="products_")
 */

class ProductController extends AbstractController
{
    /**
     * Page des produits
     *
     * @Route("/", name="show_all")
     */
    public function show_all(): Response
    {
        $products = $this->getDoctrine()->getRepository(Product::class)->findAll();
        return $this->render('products/products.html.twig', ['products' => $products]);
    }

    /**
     * Page produit
     *
     * @Route("/product/{productId<\d+>}", name="show", methods={"GET"})
     */
    public function show($productId = 1): Response
    {
        $product = $this->getDoctrine()->getRepository(Product::class)->find($productId);
        return $this->render('products/product.html.twig', ['productId' => $productId, 'price' => $product->getPrice(), 'productName' => $product->getName(), 'code' => $product->getCode(), 'description' => $product->getDescription(), 'dimensions' => $product->getDimension().' cm', 'color' => $product->getColor()]);
    }


}