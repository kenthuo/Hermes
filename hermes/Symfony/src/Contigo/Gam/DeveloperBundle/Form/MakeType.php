<?php
namespace Contigo\Gam\DeveloperBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Doctrine\ORM\EntityRepository;

class MakeType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
    	$builder->add('manufacturer', 'entity', array(
    		'required' => TRUE,
    		'class' => 'Contigo\ModelBundle\Entity\Manufacturer', 
    		'property'=>'name', 
    		'expanded' => FALSE, 
    		'multiple' => FALSE,
			'query_builder' => function(EntityRepository $er) {
        		return $er->createQueryBuilder('m')
            	->orderBy('m.name', 'ASC');
    		},    	
    	));
        $builder->add('name', 'text', array(
        	'required' => TRUE,
        ));
        $builder->add('version', 'text', array(
        	'required' => TRUE,
        ));
        $builder->add('sim_required', 'choice', array(
        	'required' => TRUE, 
        	'choices' => array(1 => 'Yes', 0 => 'No'),
        ));
    }
    
	public function getDefaultOptions(array $options)
    {
        return array(
            'data_class'        => 'Contigo\ModelBundle\Entity\Make',
            'csrf_protection'   => true,
            'csrf_field_name'   => '_token',
            'intention'         => 'make_creation',
        	'validation_groups' => array('make')
        );
    }    
}
?>