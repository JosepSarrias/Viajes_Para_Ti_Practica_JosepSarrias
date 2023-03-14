<?php

namespace App\Controller;

use App\Entity\Proveedor;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VerController extends AbstractController
{
    /**
     * @Route("/ver", name="app_ver")
     */
    public function index(): Response
    {   
        $conjunto = $this -> getDoctrine() -> getManager() -> getRepository(Proveedor::class) -> findBy([],['Nombre' => 'ASC']);

        return $this->render('ver/index.html.twig', [
             'conjunto' => $conjunto
        ]);
    }
}
