<?php

namespace Contigo\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PictureController extends Controller
{
    /**
     * Show a specific picture.
     * 
     */
    public function indexAction($id)
    {
    	$picture = $this
    		->getDoctrine()
        	->getRepository('ContigoModelBundle:Picture')
        	->find($id);

    	if ($picture) {
	        $mimeType = $picture->getFiletype();
	        $data = $picture->getData();
			$response = new Response($data);
			$response->headers->set('Content-Type', $mimeType);        
	        
			return $response;    		
    	} else {
        	throw $this->createNotFoundException('No picture found for id '.$id);
    	}

    }   
}
