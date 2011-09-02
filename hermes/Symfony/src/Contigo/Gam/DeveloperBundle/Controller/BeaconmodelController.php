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
use Contigo\Gam\DeveloperBundle\Form\BeaconmodelType;
use Contigo\ModelBundle\Entity\Beaconmodel;
use Contigo\Gam\Constant;

class BeaconmodelController extends Controller
{
	/**
	 * Display a list of beaconmodels.
	 * 
	 */	
    public function indexAction()
    {
    	
    	$repository = $this->getDoctrine()
        	->getRepository('ContigoModelBundle:Beaconmodel');
        
        $beaconmodels = $repository->findAllWithExtraProperties();
        
        $sizeOfBeaconmodels = sizeof($beaconmodels);        
    	
        return $this->render('ContigoGamDeveloperBundle:Beaconmodel:index.html.twig', 
        	array(
        		'beaconmodels' => $beaconmodels,
        		'sizeOfBeaconmodels' => $sizeOfBeaconmodels,
        	)
        );
    }
    
    /**
     * Add a beaconmodel. If HTTP REQUEST METHOD is GET, show the add page;
     * if it is POST, do "add" action.
     * 
     */    
    public function addAction()
    {    	
    	$beaconmodel = new Beaconmodel();
    	$form = $this->createForm(new BeaconmodelType(), $beaconmodel);
    	$request = $this->getRequest();    	
    	if ($request->getMethod() == 'POST') {
    		$form->bindRequest($request);
    		if ($form->isValid()) {
    			$em = $this->getDoctrine()->getEntityManager();			
                $em->persist($beaconmodel);
                $em->flush();
                return new Response(json_encode(array(
					Constant::AJAX_RESPONSE_REDIRECT_URL => $this->generateUrl('beaconmodel_list'),
					Constant::AJAX_RESPONSE_STATUS       => Constant::AJAX_RESPONSE_STATUS_SUCCESS,
				)));
            } else {
            	// if binding error found, show error message on the page, and 
            	// return the page back to the client
            	$page = $this->renderView('ContigoGamDeveloperBundle:Beaconmodel:add.html.twig', 
            		array(
            			'form' => $form->createView(),
            		));            	
                return new Response(json_encode(array(
					Constant::AJAX_RESPONSE_RELOAD_PAGE => $page,
					Constant::AJAX_RESPONSE_STATUS       => Constant::AJAX_RESPONSE_STATUS_ERROR_INVALID_ENTITY_ADD_FORM,
				)));            	
            }
    	}    	    	
        return $this->render('ContigoGamDeveloperBundle:Beaconmodel:add.html.twig',
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
        			->getRepository('ContigoModelBundle:Beaconmodel');        	
        		$repository->delete($entities);
                return new Response(json_encode(array(
					Constant::AJAX_RESPONSE_REDIRECT_URL => $this->generateUrl('beaconmodel_list'),
					Constant::AJAX_RESPONSE_STATUS       => Constant::AJAX_RESPONSE_STATUS_SUCCESS,					
				)));    			
    		} else {
                return new Response(json_encode(array(
					Constant::AJAX_RESPONSE_STATUS                      => Constant::AJAX_RESPONSE_STATUS_ERROR,
					Constant::AJAX_RESPONSE_STATUS_ERROR_SIMPLE_MESSAGE => "Please select at least one beacon model.",
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
        	->getRepository('ContigoModelBundle:Beaconmodel')
        	->find($id);
    	if (!$make) {
        	throw $this->createNotFoundException('No beacon model found for id ' . $id);
    	}        	
        $form = $this->createForm(new BeaconmodelType(), $make);
    	if ($request->getMethod() == 'POST') {
    		$form->bindRequest($request);
    		if ($form->isValid()) {
    			$em = $this->getDoctrine()->getEntityManager();
                $em->flush();
                return new Response(json_encode(array(
					Constant::AJAX_RESPONSE_REDIRECT_URL => $this->generateUrl('beaconmodel_list'),
					Constant::AJAX_RESPONSE_STATUS       => Constant::AJAX_RESPONSE_STATUS_SUCCESS,
				)));
            } else {
            	// if binding error found, show error message on the page, and 
            	// return the page back to the client
            	$page = $this->renderView('ContigoGamDeveloperBundle:Beaconmodel:update.html.twig', 
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
        return $this->render('ContigoGamDeveloperBundle:Beaconmodel:update.html.twig',
			array(
            	'form' => $form->createView(),
				'id'   => $id,
        	)        
        );
    }    
}
