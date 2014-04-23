<?php

namespace BodaClick\ServicesBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ServicesBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function reverseStringAction()
    {
        //default
        $respuesta="Cadena no valida";
        $request = $this->get('request');
        //carga strR con la cadena a convertir
        $strR = $request->query->get('str');
        switch($strR){
            case false: 
                $respuesta="Cadena no incluida";
                break;
            case '': 
               $respuesta="Error";
               break;
           default: 
               $reverse = $this->get('reverse_s');
               $respuesta=$reverse->strReversa($strR);
           break;
        }//fin switch
        
        return $this->render('ServicesBundle:Default:reverse-string.html.twig', array('respuesta' => $respuesta));
    }
    
}
