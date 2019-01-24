<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('@App/Default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/hello/{prenom}", name="hellopage")
     */
    public function helloAction($prenom, Request $request)
    {
        $name = $request->get('prenom');
        return new Response("Hello $prenom $name", 200);
    }

    /**
     * @Route("/about", name="aboutpage")
     */
    public function aboutAction()
    {
        return $this->render('@App/Category/about.html.twig');
    }
}
