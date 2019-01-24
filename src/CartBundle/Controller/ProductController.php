<?php

namespace CartBundle\Controller;

use CartBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{
    /**
     * @Route("/product/list")
     * @return Response
     */
    public function listAction()
    {
        $repo = $this->getDoctrine()->getRepository(Product::class);

        return $this->render('@Cart/Product/list.html.twig', [
            'products' => $repo->findAll(),
        ]);
    }

    /**
     * @Route("/products/add")
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

        if ($handler->onUpdate()) {
            return $this->redirectToRoute('cart_product_list');
        }

        return $this->render('@Cart/Product/form.html.twig', [
            'form' => $handler->getView(),
        ]);
    }

    /**
     * @Route(
     *     "/product/delete/{id}",
     *     requirements={"id": "\d+"},
     *     methods="GET"
     * )
     */
    public function deleteAction($id)
    {
        $repo = $this->getDoctrine()->getRepository(Product::class);
        $product = $repo->find((int) $id);

        if (!$product) {
            throw $this->createNotFoundException('Product not found');
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($product);
        $em->flush();

        return $this->redirectToRoute('cart_product_list');
    }
}
