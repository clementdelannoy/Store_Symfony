<?php

namespace CartBundle\Forms\Handler;

use CartBundle\Entity\Product;
use CartBundle\Forms\Type\ProductType;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormFactory;
use Symfony\Component\Form\FormView;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProductHandler
{
    /**
     * @var EntityManager
     */
    private $em;

    /**
     * @var FormFactory
     */
    private $form;

    /**
     * @var Request
     */
    private $request;

    /**
     * @var FormView
     */
    private $view;

    /**
     * ProductHandler constructor.
     *
     * @param EntityManager $em
     * @param FormFactory $form
     * @param RequestStack $request
     */
    public function __construct(EntityManager $em, FormFactory $form, RequestStack $request)
    {
        $this->em = $em;
        $this->form = $form;
        $this->request = $request->getCurrentRequest();
    }

    /**
     * Add new product
     *
     * @return bool
     */
    public function onSave()
    {
        return $this->handle($this->createForm(new Product()));

    }

    public function getView()
    {
        return $this->view;
    }

    public function onUpdate()
    {
        $id = $this->request->get('id');
        $repo = $this->em->getRepository(Product::class);
        $product = $repo->find($id);

        if(!$product){
            throw new NotFoundHttpException('Produit introuvable');
        }

        return $this->handle($this->createForm($product));
    }

    protected function handle(Form $form)
    {
        $form->handleRequest($this->request);

        $this->view = $form->createView();

        if ($this->request->isMethod('POST') && $form->isSubmitted()) {
            if ($form->isValid()) {
                $this->onSuccess($form);
                return true;
            }
        }
        return false;
    }

    public function onSuccess(Form $form)
    {
        $this->em->persist($form->getData());
        $this->em->flush();
    }

    /**
     * @param Product $product
     * @return \Symfony\Component\Form\FormInterface
     */
    protected function createForm(Product $product)
    {
        return $this->form->create(ProductType::class, $product);
    }
}
