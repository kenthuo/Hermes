<?php
namespace Contigo\ModelBundle\Repository;

use Doctrine\ORM\EntityRepository;

class MakeRepository extends EntityRepository
{
	/**
	 * Get makes with extra related properties.
	 * 
	 * @return array a list of makes contain make object, 
	 * and mixed with usedCount(the number of stocks associated with the make) scalar value
	 */
    public function findAllWithExtraProperties()
    {
        $dql = "SELECT m, (SELECT COUNT(s.id) FROM ContigoModelBundle:Stock s WHERE s.make = m.id) AS usedCount " .
        	   "FROM ContigoModelBundle:Make m";    	
        return $this->getEntityManager()
            ->createQuery($dql)
            ->getResult();
    }
    
    /**
     * 
     * Delete selected makes.
     * 
     * @param array $identities array of identities of selected makes.
     * @return integer the number of deleted makes.
     */
    public function delete($identities) 
    {
    	$numDeleted = 0;
    	if (!empty($identities) && is_array($identities)) {
    		$ids = implode(',', $identities);
    		$dql = "DELETE FROM ContigoModelBundle:Make m WHERE m.id IN ($ids)";
			$numDeleted = $this
				->getEntityManager()
				->createQuery($dql)
				->execute();
    	}
    	return $numDeleted;
    }    
}
?>