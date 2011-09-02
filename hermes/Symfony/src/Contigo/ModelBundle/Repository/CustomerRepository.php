<?php
namespace Contigo\ModelBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CustomerRepository extends EntityRepository
{
	/**
	 * Get all customers with extra related properties.
	 * 
	 * @return array a list of customers contain customer object, and mixed with 
	 * parentPartnername.
	 */
    public function findAllWithExtraProperties()
    {
        $dql = "SELECT c1, c2.name AS parentName " .
        	   "FROM ContigoModelBundle:Customer c1 LEFT JOIN customer c2 ON c1.parent = c2.id ORDER BY c1.name";    	
        return $this->getEntityManager()
            ->createQuery($dql)
            ->getResult();
    }
}
?>