<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Form\ServicioType;
use AppBundle\Entity\Servicio;

/**
     * @Route("/gestionServicios")
     */

class GestionServiciosController extends Controller
{
    /**
     * @Route("/nuevoServicio", name="nuevoServicio")
     */
    public function nuevoServicioAction(Request $request)
    {
        if(!is_null($request)){
            $datos=$request->request->all();
            var_dump($datos);
        }
        $servicio = new Servicio();
        //Construyendo el formulario
        $form = $this->createForm(ServicioType::class, $servicio);
        return $this->render('gestionServicios/nuevoServicio.html.twig',array('form'=>$form->createView()));
    }
}
