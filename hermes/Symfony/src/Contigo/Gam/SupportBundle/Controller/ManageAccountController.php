<?php

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Contigo\Gam\SupportBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Contigo\Gam\SupportBundle\Form\ManageAccountType;

class ManageAccountController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getEntityManager();	    	
    	$form = $this->createForm(new ManageAccountType($em));    	
        return $this->render('ContigoGamSupportBundle:ManageAccount:index.html.twig',
			array(
            	'form' => $form->createView(),
        	)        
        );
    }
    
    /**
     * 
     * Action to handle when user select a new customer, the member list should 
     * be refreshed.
     * 
     * @param integer $id identity of a customer.
     */
    public function changeCustomerAction($id)
    {
    	$request = $this->getRequest();
    	$em = $this->getDoctrine()->getEntityManager();
    	$form = $this->createForm(new ManageAccountType($em));
        return $this->render('ContigoGamSupportBundle:ManageAccount:change_customer.html.twig',
			array(
            	'form' => $form->createView(),
        	)        
        );    	
    }
}
