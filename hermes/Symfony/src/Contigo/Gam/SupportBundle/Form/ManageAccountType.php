<?php
namespace Contigo\Gam\SupportBundle\Form;

use Contigo\Gam\Constant;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

class ManageAccountType extends AbstractType
{
	protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }	
	
    public function buildForm(FormBuilder $builder, array $options)
    {
    	$builder->add('customer', 'entity', array(
    		'required' => true,
    		'class' => 'Contigo\ModelBundle\Entity\Customer', 
    		'property'=>'name', 
    		'expanded' => false, 
    		'multiple' => false,
			'query_builder' => function(EntityRepository $er) {
        		return $er->createQueryBuilder('c')
            	->orderBy('c.name', 'ASC');
    		},    	
    	));    	
    	   		
    	$em = $this->em;
    	
    	$customerId = -1;
    	if (!isset($options['customer_id'])) {
            // pick the first customer as the default customer to retrieve its member's logins    			
			$dql = 'SELECT c FROM ContigoModelBundle:Customer c ORDER BY c.name ASC';
			$query = $em
				->createQuery($dql)
				->setMaxResults(1);			
			try {
				$customer = $query->getSingleResult();
				$customerId = $customer->getId();
			} catch (\Doctrine\Orm\NoResultException $e) {
				$customer = null;
			}
    	} else {
    		$customerId = $options['customer_id'];    		
    	}
	    	
    	$builder->add('member', 'entity', array(
    		'required' => true,
    		'class'    => 'Contigo\ModelBundle\Entity\Member', 
    		'property' => 'compositeOfNames', 
    		'expanded' => false, 
    		'multiple' => false,
			'query_builder' => function(EntityRepository $er) use ($em, $customerId) {    			    	
        		return $er->createQueryBuilder('m')
        			->where('m.customer = :customer')
        			->setParameter('customer', $customerId)
        			->orderBy('m.firstname', 'ASC');
	    	},    	
	    ));
	    
	    $builder->add('panel_id', 'hidden', array( 
			'data' => 'manage-account-fs', 
		)); 
    }
    
	public function getDefaultOptions(array $options)
    {
        return array(
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'intention'       => 'manage_account',
        );
    }    
}
?>