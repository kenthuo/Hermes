<?php

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Contigo\Gam\BeaconBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Contigo\Gam\DeveloperBundle\Form\LocationType;
use Contigo\ModelBundle\Entity\Location;
use Contigo\Gam\Constant;

class LocationController extends Controller
{
	/**
	 * Display a list of locations.
	 * 
	 */
    public function indexAction()
    {
    	
    	$repository = $this
    		->getDoctrine()
        	->getRepository('ContigoModelBundle:Location');
        	
        $locations = $repository->findAllWithExtraProperties();
        
        $sizeOfLocations = sizeof($locations);

        return $this->render('ContigoGamBeaconBundle:Location:index.html.twig', 
        	array(
        		'locations' => $locations,
        		'sizeOfLocations' => $sizeOfLocations,
        	)
    	);
    }
    
    /**
     * Add a location. If HTTP REQUEST METHOD is GET, show the add page;
     * if it is POST, do "add" action.
     * 
     */
    public function addAction()
    {    	
    	$location = new Location();
    	$form = $this->createForm(new LocationType(), $location);
    	$request = $this->getRequest();    	
    	if ($request->getMethod() == 'POST') {
    		$form->bindRequest($request);
    		if ($form->isValid()) {
    			$em = $this->getDoctrine()->getEntityManager();			
                $em->persist($location);
                $em->flush();
                return new Response(json_encode(array(
					Constant::AJAX_RESPONSE_REDIRECT_URL => $this->generateUrl('location_list'),
					Constant::AJAX_RESPONSE_STATUS       => Constant::AJAX_RESPONSE_STATUS_SUCCESS,
				)));
            } else {
            	// if binding error found, show error message on the page, and 
            	// return the page back to the client
            	$page = $this->renderView('ContigoGamDeveloperBundle:Location:add.html.twig', 
            		array(
            			'form' => $form->createView(),
            		));            	
                return new Response(json_encode(array(
					Constant::AJAX_RESPONSE_RELOAD_PAGE => $page,
					Constant::AJAX_RESPONSE_STATUS       => Constant::AJAX_RESPONSE_STATUS_ERROR_INVALID_ENTITY_ADD_FORM,
				)));
            	
            }
    	}    	    	
        return $this->render('ContigoGamDeveloperBundle:Location:add.html.twig',
			array(
            	'form' => $form->createView(),
        	)        
        );
    }    
    
    /**
     * Delete selected location(s). If HTTP REQUEST METHOD is POST, 
     * do "delete" action; otherwise do nothing.
     * 
     */
    public function deleteAction()
    {   
    	$request = $this->getRequest();
    	$entities = $request->get('entity'); // identities of selected locations
    	 	
    	if ($request->getMethod() == 'POST') {
    		$sizeOfEntities = sizeof($entities);
    		if ($sizeOfEntities > 0) {
    			$repository = $this
    				->getDoctrine()
        			->getRepository('ContigoModelBundle:Location');        	
        		$repository->delete($entities);
                return new Response(json_encode(array(
					Constant::AJAX_RESPONSE_REDIRECT_URL => $this->generateUrl('location_list'),
					Constant::AJAX_RESPONSE_STATUS       => Constant::AJAX_RESPONSE_STATUS_SUCCESS,					
				)));    			
    		} else {
                return new Response(json_encode(array(
					Constant::AJAX_RESPONSE_STATUS                      => Constant::AJAX_RESPONSE_STATUS_ERROR,
					Constant::AJAX_RESPONSE_STATUS_ERROR_SIMPLE_MESSAGE => "Please select at least one location.",
				)));    			
    		}
    	}
    }    
    
    /**
     * Update a location. If HTTP REQUEST METHOD is GET, show the update page;
     * if it is POST, do "update" action.
     * 
     */
    public function updateAction($id)
    {   
    	$request = $this->getRequest(); 	
    	$location = $this->getDoctrine()
        	->getRepository('ContigoModelBundle:Location')
        	->find($id);
    	if (!$location) {
        	throw $this->createNotFoundException('No location found for id ' . $id);
    	}        	
        $form = $this->createForm(new LocationType(), $location);
    	if ($request->getMethod() == 'POST') {
    		$form->bindRequest($request);
    		if ($form->isValid()) {
    			$em = $this->getDoctrine()->getEntityManager();
                $em->flush();
                return new Response(json_encode(array(
					Constant::AJAX_RESPONSE_REDIRECT_URL => $this->generateUrl('location_list'),
					Constant::AJAX_RESPONSE_STATUS       => Constant::AJAX_RESPONSE_STATUS_SUCCESS,
				)));
            } else {
            	// if binding error found, show error message on the page, and 
            	// return the page back to the client
            	$page = $this->renderView('ContigoGamDeveloperBundle:Location:update.html.twig', 
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
        return $this->render('ContigoGamDeveloperBundle:Location:update.html.twig',
			array(
            	'form' => $form->createView(),
				'id'   => $id,
        	)        
        );
    }
}
