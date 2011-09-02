<?php
namespace Contigo\Gam\DeveloperBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class LocationType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('name', 'text', array(
        	'required' => TRUE
        ));
        $builder->add('address', 'text', array(
        	'required' => TRUE
        ));        
    }
    
	public function getDefaultOptions(array $options)
    {
        return array(
            'data_class'        => 'Contigo\ModelBundle\Entity\Location',
            'csrf_protection'   => TRUE,
            'csrf_field_name'   => '_token',
            'intention'         => 'location_creation',
        	'validation_groups' => array('location')
        );
    }    
}
?>