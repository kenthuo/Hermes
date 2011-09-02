<?php
namespace Contigo\Gam\DeveloperBundle\Form;

use Contigo\Gam\Constant;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Doctrine\ORM\EntityRepository;

class BeaconmodelType extends AbstractType
{
	
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('name', 'text', array(
        	'required' => true,
        ));
        $builder->add('model', 'text', array(
        	'required' => true,
        ));
/*
    	$builder->add('makes', 'entity', array(
    		'required' => true,
    		'class' => 'Contigo\ModelBundle\Entity\Make', 
    		'property'=>'compositeOfNameVersion', 
    		'expanded' => true, 
    		'multiple' => true,
			'query_builder' => function(EntityRepository $er) {
        		return $er->createQueryBuilder('m')
            	->orderBy('m.name', 'ASC')
            	->addOrderBy('m.version', 'ASC');
    		},    	
    	));
*/

		$builder->add('makes', 'collection', array(
        	'type'         => new MakeBeaconmodelType(),
            'allow_add'    => true,
            'allow_delete' => true,
        ));        
        
        $builder->add('type', 'choice', array(
        	'required' => true, 
        	'choices' => Constant::getBeaconmodelType(),
        ));
        $builder->add('device_table_name', 'choice', array(
        	'required' => true, 
        	'choices' => Constant::getBeaconmodelManager(),
        )); 
        $builder->add('picture', 'file');   
        $builder->add('height', 'text', array(
        	'required' => true,
        ));
        $builder->add('width', 'text', array(
        	'required' => true,
        ));  
        $builder->add('depth', 'text', array(
        	'required' => true,
        )); 
        $builder->add('weight', 'text', array(
        	'required' => true,
        ));
        $builder->add('color', 'choice', array(
        	'required' => true, 
        	'choices' => Constant::getBeaconmodelColor(),
        ));                  
        $builder->add('description', 'text', array(
        	'required' => true,
        )); 
        $builder->add('gmms_cost', 'text', array(
        	'required' => true,
        ));
        $builder->add('gmms_cost_currency', 'choice', array(
        	'required' => true, 
        	'choices' => Constant::getCurrency(),
        ));
        $builder->add('p2p_cost', 'text', array(
        	'required' => true,
        ));
        $builder->add('p2p_cost_currency', 'choice', array(
        	'required' => true, 
        	'choices' => Constant::getCurrency(),
        ));
        $builder->add('output_count', 'text', array(
        	'required' => true,
        ));  
        $builder->add('input_count', 'text', array(
        	'required' => true,
        ));
        $builder->add('notes', 'textarea', array(
        	'required' => false,
        ));                                                                               
    }
    
	public function getName()
	{
		return "beaconmodel";
	}    
    
	public function getDefaultOptions(array $options)
    {
        return array(
            'data_class'        => 'Contigo\ModelBundle\Entity\Beaconmodel',
            'csrf_protection'   => true,
            'csrf_field_name'   => '_token',
            'intention'         => 'beaconmodel_creation',
        	'validation_groups' => array('beaconmodel')
        );
    }    
}
?>