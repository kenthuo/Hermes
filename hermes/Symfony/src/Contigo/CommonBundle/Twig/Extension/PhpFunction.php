<?php
namespace Contigo\CommonBundle\Twig\Extension;

use \Twig_Filter_Method;
use \Twig_Environment;
use \Twig_Extension;

class PhpFunction extends \Twig_Extension 
{
	
    public function getFilters() 
    {
        return array(
            'ucwords'   => new \Twig_Filter_Function('ucwords'),
        	'var_dump'  => new \Twig_Filter_Function('var_dump'),
        );
    }
       

    public function getName()
    {
        return 'PhpFunction';
    } 

}
?>