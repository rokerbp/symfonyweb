<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use AppBundle\Entity\Servicio;
use AppBundle\Entity\Categoria;
use AppBundle\Entity\Usuario;

use AppBundle\Form\UsuarioType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class DefaultController extends Controller
{
    /**
     * @Route("/{pagina}", name="homepage")
     */
    public function indexAction(Request $request,$pagina=1)
    {
        //Capturar el repositorio de la tabla contra la BD
        $servicioRepository = $this->getDoctrine()->getRepository(Servicio::class);
        $servicios = $servicioRepository->paginaServicios($pagina);
        // replace this example code with whatever you need
        return $this->render('frontal/index.html.twig',array('servicios'=>$servicios,'paginaActual'=>$pagina));
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

    /**
     * @Route("/categoria/{id}", name="categoria")
     */
    public function catAction(Request $request,$id=null)
    {
        if($id!=null){
            $categoriaRepository = $this->getDoctrine()->getRepository(Categoria::class);
            $categoria = $categoriaRepository->find($id);
            return $this->render('frontal/categoria.html.twig',array("categoria"=>$categoria));
        }else{
            return $this->redirectToRoute('homepage');
        }
    }

    /**
     * @Route("/registro/", name="registro")
     */
    public function registroAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $usuario = new Usuario();
        //Construyendo el formulario
        $form = $this->createForm(UsuarioType::class, $usuario);

        //Reogemos la informacion
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $passwordEncoder->encodePassword($usuario, $usuario->getPlainPassword());
            $usuario->setPassword($password);

            //3b) $username = $email
            $usuario->setUsername($usuario->getEmail());

            //3c) $roles
            $usuario->setRoles(array('ROLE_USER'));

            // 4) save the User!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($usuario);
            $entityManager->flush();
  
            return $this->redirectToRoute('login');
        }

        return $this->render('frontal/registro.html.twig',array('form'=>$form->createView()));
    }

    /**
     * @Route("/login/", name="login")
     */
    public function loginAction(Request $request, AuthenticationUtils $authenticationUtils)
    {
         // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('frontal/login.html.twig',  array(
            'last_username' => $lastUsername,
            'error'         => $error,
            ));
    }

}
