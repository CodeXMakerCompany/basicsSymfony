<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
//importar modelo/entidad
use App\Entity\Usuarios;

class UsersController extends AbstractController
{
    /**
     * @Route("/users", name="users")
     */
    public function index()
    {	
    	$em = $this->getDoctrine()->getManager();
    	$user_repo = $this->getDoctrine()->getRepository(Usuarios::class);
    	$usuarios = $user_repo->findAll();
    	
    	//Query Builder-filtro por nombre de campo-
    	//la docu de doctrine se puede analizar para esto
    	$qb = $user_repo->createQueryBuilder('a')
    					->andWhere("a.modo = 'directo'")
    					->getQuery();
    	$resultset = $qb->execute();
    	
    	//var_dump($resultset);

    	// DQL
    	$dql = "SELECT a FROM App\Entity\Usuarios a WHERE a.modo = 'directo'";
    	$query = $em->createQuery($dql);
    	$resultset = $query->execute();				
    	//var_dump($resultset);
    	//
    	
    	// SQL
    	$connection = $this->getDoctrine()->getConnection();
    	$sql = 'SELECT * FROM usuarios ORDER BY id DESC';
    	$prepare = $connection->prepare($sql);
    	$prepare->execute();
    	//fetch all saca el array de arrays y fetch normal solo me daria el ultimo
    	$resultset = $prepare->fetchAll();
    	var_dump($resultset);

        return $this->render('users/index.html.twig', [
            'controller_name' => 'UsersController',
            'usuarios' => $usuarios
        ]);
    }

    public function save() {
    	//Guardar en una tabla de la bd
    	$entityManager = $this->getDoctrine()->getManager();

    	$usuario = new Usuarios();



    	$usuario->setNombre('SymfonyUser');
    	$usuario->setPassword('12345');
    	$usuario->setEmail('symfony@gmail.com');
    	$usuario->setModo('manual');
    	$usuario->setFoto('chocho.jpg');
    	$usuario->setVerificacion('1');
    	$usuario->setEmailencriptado('symfony@gmail.com');
    	$usuario->setFecha(new \DateTime());

    	//Guardar objeto en doctrine
    	$entityManager->persist($usuario);
 		
 		//Guardar a la bd
 		$entityManager->flush();

    	return new Response('Usuario guardado: '.$usuario->getNombre());
    }

    public function usuario($id){

    	//Cargar repositorio
    	$user_repo = $this->getDoctrine()->getRepository(Usuarios::class);

    	//Consulta
    	$usuario = $user_repo->find($id);

    	//Comprobar si el resultado es correcto
    	if (!$usuario) {
    		$message = "No se detecta usuario";
    	}else{
    		$message = 'Usuario identificado :'.$usuario->getNombre().' - '.$usuario->getEmail();
    	}



    	return new Response('Hola desde la funcion usuario'.$message);
    }

    public function update($id) {
    	//Cargar doctrine
    	$doctrine = $this->getDoctrine();

    	//Cargar entiyi manager
    	$em = $doctrine->getManager();

    	//Cargar repo usuarios
    	$user_repo = $em->getRepository(Usuarios::class);

    	//Find para copnseguir el objeto 
    	$usuario = $user_repo->find($id);

    	//Comprobar si ha llegado
    	if (!$usuario) {
    		$message = "El usuario no existe la bd";
    	}else{

    		//Asignarle los valores al objeto
    		$usuario->setNombre('nameUpdated');

    		$usuario->setPassword('passwordUpdated');

    		//Persistir en doctrine
    		$em->persist($usuario);
    	
    		//Guardar en la bd
    		$em->flush();

    		//Mensaje de exito
    		$message = 'Has actualizado el usuario'.$usuario->getId();
    	}
    		//Respuesta
    	return new Response($message);
    }

    public function delete(Usuarios $usuario){
    	$em = $this->getDoctrine()->getManager();

    	if ($usuario && is_object($usuario)) {
    			$em->remove($usuario);
    			$em->flush();

    			$message = "El usuario  ha sido borrado exitosamente";
    		}else{

    			$message = "El usuario no ha sido encontrado o hubo un error en la instruccion";
    		}	
    	

    	
    	return new Response($message);
    }
}
