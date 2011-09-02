<?php
namespace Contigo\Gam\DeveloperBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Doctrine\ORM\EntityRepository;

class MakeBeaconmodelType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
    	$builder->add('make', 'entity', array(
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
    }
    
	public function getName()
	{
		return "make_beaconmodel";
	}    
    
	public function getDefaultOptions(array $options)
    {
        return array(
            'data_class'        => 'Contigo\ModelBundle\Entity\MakeBeaconmodel',
        );
    }    
}
?>