<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Servicio;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        //Capturar el repositorio de la tabla contra la BD
        $servicioRepository = $this->getDoctrine()->getRepository(Servicio::class);
        $servicios = $servicioRepository->findByTop(1);
        //var_dump($servicios);
        // replace this example code with whatever you need
        return $this->render('frontal/index.html.twig',array('servicios'=>$servicios));
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

    /**
     * @Route("/servicio/{id}", name="servicio")
     */
    public function servicioAction(Request $request,$id=null)
    {
        if($id!=null){
            $servicioRepository = $this->getDoctrine()->getRepository(Servicio::class);
            $servicio = $servicioRepository->find($id);
            return $this->render('frontal/servicio.html.twig',array("servicio"=>$servicio));
        }else{
            return $this->redirectToRoute('homepage');
        }
    }
}
