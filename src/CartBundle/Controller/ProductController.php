<?php

namespace CartBundle\Controller;

use CartBundle\Entity\Product;
use CartBundle\Forms\Handler\ProductHandler;
use CartBundle\Forms\Type\ProductType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{
    /**
     * @Route("/product/list", name="cart_product_list")
     */
    public function listAction()
    {
        $repo = $this->getDoctrine()->getRepository(Product::class);
        $products = $repo->findAll();

        return $this->render('@Cart/Product/list.html.twig' , ['products' => $products]);
    }

    /**
     * @Route("/product/add")
     *
     * @param Request $request
     * @return Response
     */
    public function addAction(Request $request)
    {
        $handler = $this->get('cart.product.handler');

        if ($handler->onSave()) {

            return $this->redirectToRoute('cart_product_list');
        }

        return $this->render('@Cart/Product/form.html.twig', [
            'form' => $handler->getView(),
        ]);
    }

    /**
     * @Route("/product/edit/{id}")
     */
    public function editAction()
    {
        $handler = $this->get('cart.product.handler');

        if ($handler->onUpdate()){
            return $this->redirectToRoute('cart_product_list');
        }

        return $this->render('@Cart/Product/form.html.twig', [
            'form' => $handler->getView(),
        ]);
    }

    /**
     * @Route("/product/delete/{id}", requirements= {"id": "\d+"}, name="cart_product_delete")
     */
    public function deleteAction(int $id)
    {
        $repo = $this->getDoctrine()->getRepository(Product::class);
        $product = $repo->find($id);

        if (!$product){
            throw $this->createNotFoundException('Produit introuvable');
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($product);
        $em->flush();

        return $this->redirectToRoute('cart_product_list');
    }

    /**
     * @Route("/product/view/{id}", requirements= {"id": "\d+"})
     */
    public function viewAction($id)
    {
        $repo = $this->getDoctrine()->getRepository(Product::class);
        $product = $repo->find($id);

        if (!$product){
            throw $this->createNotFoundException('Produit introuvable');
        }

        return $this->render('@Cart/Product/details.html.twig', ["product" => $product]);
    }
}
