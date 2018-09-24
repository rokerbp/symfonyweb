<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        //Capturar el repositorio de la tabla contra la BD
        $repository = $this->getDoctrine()->getRepository(Servicio::class);
        // replace this example code with whatever you need
        return $this->render('frontal/index.html.twig');
    }

    /**
     * @Route("/nosotros", name="nosotros")
     */
    public function nosotrosAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('frontal/nosotros.html.twig');
    }

    /**
     * @Route("/servicios/{sitio}", name="servicios")
     */
    public function serviciosAction(Request $request,$sitio="todos")
    {
        // replace this example code with whatever you need
        return $this->render('frontal/servicios.html.twig',array("sitio"=>$sitio));
    }
}
