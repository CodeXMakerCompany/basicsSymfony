<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'hello' => 'Hola mundo con symfony 4'
        ]);
    }

    public function personas($nombre, $apellidos){
    	$title = 'Bienvenido a la pagina de Personas';
    	//array normal
    	$personas = array('persona1','persona2','persona3','persona4');

    	//array asociativo
    	$documento = array(
    		'nombre' => 'primerDocumento',
    		'peso' => '24mb',
    		'fechaActualizacion' => '25nov',
    		'folio' => 001572,
    		'tipo' => 'clasificadosA'
    		
     	);

    	return $this->render('home/personas.html.twig', [
    		'title' => $title,
    		'nombre' => $nombre,
    		'apellidos' => $apellidos,
    		'personas' => $personas,
    		'documento' => $documento
    	]);
    }

    public function redirigir() {
    	/*return $this->redirectToRoute('personas', [
    		'title' => 'TituloDeLaRedireccion',
    		'nombre' => 'SamuelRedireccin',
    		'apellidos' => 'ApellidosRedireccion'
    	]);*/
    	return $this->redirect('https://linktr.ee/yowsam');
    }
}
