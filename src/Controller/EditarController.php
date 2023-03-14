<?php

namespace App\Controller;

use App\Entity\Proveedor;
use App\Form\ProvedorType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EditarController extends AbstractController
{
  /**
     * @Route("/editar/{id}", name="modificando")
     */
    public function editando($id,Request $request): Response
    {       
        $proveedor = $this->getDoctrine()->getRepository(Proveedor::class)->find($id);
        $form = $this -> createForm(ProvedorType::class, $proveedor);
        $form ->handleRequest($request);

        if ($form -> isSubmitted() && $form -> isValid()){
            $em = $this->getDoctrine() -> getManager();
            $em -> persist($proveedor);
            $em ->flush();

            return $this -> redirectToRoute('app_ver');
        }

        return $this->render('editar/index.html.twig', [
            'formulario' => $form ->createView()
        ]);
    }
}