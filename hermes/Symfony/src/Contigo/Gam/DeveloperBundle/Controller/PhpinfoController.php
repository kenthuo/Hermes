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

class PhpinfoController extends Controller
{
	/**
	 * extract the style and body from phpinfo() output, and embed it into our 
	 * template.  
	 * 
	 */
    public function indexAction()
    {                                                                                                    
		ob_start();
		phpinfo();
		$phpinfo = ob_get_clean();
		preg_match ('%<style type="text/css">(.*?)</style>.*?<body>(.*?)</body>%s', $phpinfo, $matches);
		ob_end_clean();
		# $matches [1]; # Style information
		# $matches [2]; # Body information

		$phpinfo =  "<div id='php-info-panel'><style type='text/css'>\n" .
    		join( "\n",
        		array_map(
            		create_function(
                		'$i',
                		'return "#php-info-panel " . preg_replace( "/,/", ",#php-info-panel ", $i );'
                	),
            		preg_split( '/\n/', trim(preg_replace( "/\nbody/", "\n", $matches[1])) )
            	)
        	) .
    		"</style>\n" .
    		$matches[2] .
    		"\n</div>\n";                                                                                                         
  	
        return $this->render('ContigoGamDeveloperBundle:Phpinfo:index.html.twig', 
        	array(
        		'phpinfo' => $phpinfo,
        	));
    }
}
