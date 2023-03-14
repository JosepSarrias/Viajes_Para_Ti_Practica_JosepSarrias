<?php

namespace App\Controller;

use App\Entity\Proveedor;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BorrarController extends AbstractController
{
    /**
     * @Route("/borrar/{id}", name="app_borrar")
     */
    public function index($id): Response
    {
        $manager = $this ->getDoctrine()->getManager();
        $elemento = $manager -> getRepository(Proveedor::class)->find($id);
        $manager -> remove($elemento);
        $manager->flush();
        return $this->redirectToRoute('app_ver');
    }
}
