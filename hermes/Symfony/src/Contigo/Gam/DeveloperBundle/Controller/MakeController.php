<?php

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Contigo\Gam\DeveloperBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Contigo\Gam\DeveloperBundle\Form\MakeType;
use Contigo\ModelBundle\Entity\Make;
use Contigo\Gam\Constant;

class MakeController extends Controller
{
	/**
	 * Display a list of makes.
	 * 
	 */	
    public function indexAction()
    {
    	
    	$repository = $this->getDoctrine()
        	->getRepository('ContigoModelBundle:Make');        	
        
        $makes = $repository->findAllWithExtraProperties();
        
        $sizeOfMakes = sizeof($makes);        
    	
        return $this->render('ContigoGamDeveloperBundle:Make:index.html.twig', 
        	array(
        		'makes' => $makes,
        		'sizeOfMakes' => $sizeOfMakes,
        	)
        );
    }
    
    /**
     * Add a make. If HTTP REQUEST METHOD is GET, show the add page;
     * if it is POST, do "add" action.
     * 
     */    
    public function addAction()
    {    	
    	$make = new Make();
    	$form = $this->createForm(new MakeType(), $make);
    	$request = $this->getRequest();    	
    	if ($request->getMethod() == 'POST') {
    		$form->bindRequest($request);
    		if ($form->isValid()) {
    			$em = $this->getDoctrine()->getEntityManager();			
                $em->persist($make);
                $em->flush();
                return new Response(json_encode(array(
					Constant::AJAX_RESPONSE_REDIRECT_URL => $this->generateUrl('make_list'),
					Constant::AJAX_RESPONSE_STATUS       => Constant::AJAX_RESPONSE_STATUS_SUCCESS,
				)));
            } else {
            	// if binding error found, show error message on the page, and 
            	// return the page back to the client
            	$page = $this->renderView('ContigoGamDeveloperBundle:Make:add.html.twig', 
            		array(
            			'form' => $form->createView(),
            		));            	
                return new Response(json_encode(array(
					Constant::AJAX_RESPONSE_RELOAD_PAGE => $page,
					Constant::AJAX_RESPONSE_STATUS       => Constant::AJAX_RESPONSE_STATUS_ERROR_INVALID_ENTITY_ADD_FORM,
				)));            	
            }
    	}    	    	
        return $this->render('ContigoGamDeveloperBundle:Make:add.html.twig',
			array(
            	'form' => $form->createView(),
        	)        
        );
    }    
    
    /**
     * Delete selected make(s). If HTTP REQUEST METHOD is POST, 
     * do "delete" action; otherwise do nothing.
     * 
     */
    public function deleteAction()
    {   
    	$request = $this->getRequest();
    	$entities = $request->get('entity'); // identities of selected manufacturers
    	 	
    	if ($request->getMethod() == 'POST') {
    		$sizeOfEntities = sizeof($entities);
    		if ($sizeOfEntities > 0) {
    			$repository = $this
    				->getDoctrine()
        			->getRepository('ContigoModelBundle:Make');        	
        		$repository->delete($entities);
                return new Response(json_encode(array(
					Constant::AJAX_RESPONSE_REDIRECT_URL => $this->generateUrl('make_list'),
					Constant::AJAX_RESPONSE_STATUS       => Constant::AJAX_RESPONSE_STATUS_SUCCESS,					
				)));    			
    		} else {
                return new Response(json_encode(array(
					Constant::AJAX_RESPONSE_STATUS                      => Constant::AJAX_RESPONSE_STATUS_ERROR,
					Constant::AJAX_RESPONSE_STATUS_ERROR_SIMPLE_MESSAGE => "Please select at least one make.",
				)));    			
    		}
    	}
    }    
    
    /**
     * Add a make. If HTTP REQUEST METHOD is GET, show the update page;
     * if it is POST, do "update" action.
     * 
     */
    public function updateAction($id)
    {   
    	$request = $this->getRequest(); 	
    	$make = $this->getDoctrine()
        	->getRepository('ContigoModelBundle:Make')
        	->find($id);
    	if (!$make) {
        	throw $this->createNotFoundException('No make found for id ' . $id);
    	}        	
        $form = $this->createForm(new MakeType(), $make);
    	if ($request->getMethod() == 'POST') {
    		$form->bindRequest($request);
    		if ($form->isValid()) {
    			$em = $this->getDoctrine()->getEntityManager();
                $em->flush();
                return new Response(json_encode(array(
					Constant::AJAX_RESPONSE_REDIRECT_URL => $this->generateUrl('make_list'),
					Constant::AJAX_RESPONSE_STATUS       => Constant::AJAX_RESPONSE_STATUS_SUCCESS,
				)));
            } else {
            	// if binding error found, show error message on the page, and 
            	// return the page back to the client
            	$page = $this->renderView('ContigoGamDeveloperBundle:Make:update.html.twig', 
            		array(
            			'form' => $form->createView(),
            			'id'   => $id,
            		));            	
                return new Response(json_encode(array(
					Constant::AJAX_RESPONSE_RELOAD_PAGE => $page,
					Constant::AJAX_RESPONSE_STATUS       => Constant::AJAX_RESPONSE_STATUS_ERROR_INVALID_ENTITY_UPDATE_FORM,
				)));            	
            }
    	}   	    	
        return $this->render('ContigoGamDeveloperBundle:Make:update.html.twig',
			array(
            	'form' => $form->createView(),
				'id'   => $id,
        	)        
        );
    }    
}
