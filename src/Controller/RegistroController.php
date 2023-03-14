<?php

namespace App\Controller;
use App\Form\ProvedorType;
use App\Entity\Proveedor;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegistroController extends AbstractController
{
    /**
     * @Route("/", name="app_registro")
     */
    public function index(Request $request): Response
    {
        $proveedor = new Proveedor();
        
        $form = $this->createForm(ProvedorType::class,$proveedor);
        $form -> handleRequest($request);      

        if ($form -> isSubmitted() && $form -> isValid()){
            $em = $this->getDoctrine() -> getManager();
            $em -> persist($proveedor);
            $em ->flush();
            return $this -> redirectToRoute('app_ver');
        }

        return $this->render('registro/index.html.twig', [
                'formulario'=>$form ->createView() 
        ]);
    }
}


