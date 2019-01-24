<?php

namespace CartBundle\Controller;

use CartBundle\Entity\Category;
use CartBundle\Forms\Type\CategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class CategoryController extends Controller
{
    /**
     * @Route("/category/list")
     */
    public function listAction()
    {
        $repo = $this->getDoctrine()->getRepository(Category::class);
        $categories = $repo->findAll();

        return $this->render('@Cart/Category/list.html.twig', [
            'categories' => $categories,
        ]);
    }

    /**
     * @Route("/category/edit/{id}", requirements={"id": "\d+"})
     */
    public function editAction(int $id, Request $request)
    {
        $repo = $this->getDoctrine()->getRepository(Category::class);
        $category = $repo->find($id);

        if (!$category) {
            throw $this->createNotFoundException('Category not found');
        }

        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($request->isMethod('POST') && $form->isSubmitted()) {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($form->getData());
                $em->flush();

                $this->addFlash('success', 'La catégorie a été mise à jour avec succès.');
                return $this->redirectToRoute('cart_category_list');
            }
        }

        return $this->render('@Cart/Category/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/category/delete/{id}", requirements={"id": "\d+"})
     */
    public function deleteAction(int $id)
    {
        $repo = $this->getDoctrine()->getRepository(Category::class);
        $category = $repo->find($id);

        if (!$category) {
            throw $this->createNotFoundException('Categorie introuvable');
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($category);
        $em->flush();

        $this->addFlash('success', 'La catégorie a été supprimée avec succès.');
        return $this->redirectToRoute('cart_category_list');
    }

    /**
     * @Route("/category/add", name="cart_category_add")
     */
    public function addAction(Request $request)
    {
        $form = $this->createForm(CategoryType::class, new Category());
        $form->handleRequest($request);

        if ($request->isMethod('POST') && $form->isSubmitted()) {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($form->getData());
                $em->flush();

                $this->addFlash('success', 'La catégorie a été ajoutée avec succès.');

                return $this->redirectToRoute('cart_category_list');
            }
        }

        return $this->render('@Cart/Category/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
