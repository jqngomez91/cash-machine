<?php

namespace CashBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CashBundle\Entity\Task;
use CashBundle\Entity\Machine;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {

    	$task = new Task();

    	$form = $this->createFormBuilder($task)
            ->add('cantidad', 'text')
            ->add('save', 'submit', array('label' => 'Retirar'))
            ->getForm();

        return $this->render('CashBundle:Default:index.html.twig', array(
            'form' => $form->createView(),
        ));




        //return $this->render('CashBundle:Default:index.html.twig', array('name' => $name));
    }

    public function resultAction(Request $request){
    	$result = $request->get('form');
    	//echo $result['cantidad'];
    	$atm = new Machine($result['cantidad']);
    	return $this->render('CashBundle:Default:result.html.twig', array('result' => $atm->whitdraw()));
		//echo 'Resultado: '. ;
    }
}
