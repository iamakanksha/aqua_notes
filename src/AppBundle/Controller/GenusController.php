<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class GenusController extends Controller
{
    /**
     *
     */
    public function getShowAction($genusName){
        return $this->render('genus/show.html.twig', array( 'name' => $genusName,
        ));
    }

    /**
     */
    public function getNotesAction(){
        $notes=[['id'=>1,'username'=>'Aquaholic','avatarUri'=>'/images/leanna.jpeg','note'=>'Octopus is talking'],
            ['id'=>2,'username'=>'Aquameric','avatarUri'=>'/images/octopus-rubescens.jpg','note'=>'Octopus is talking 2'],
            ['id'=>3,'username'=>'Aquaterrific','avatarUri'=>'/images/ryan.jpeg','note'=>'Octopus is talking 3']];
        $data=[
            'notes'=>$notes
        ];
        return new JsonResponse($data);
    }
}
