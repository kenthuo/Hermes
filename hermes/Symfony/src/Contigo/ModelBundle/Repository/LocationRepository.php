<?php
namespace Contigo\ModelBundle\Repository;

use Doctrine\ORM\EntityRepository;

class LocationRepository extends EntityRepository
{
	/**
	 * Get locations with extra related properties.
	 * 
	 * @return array a list of locations contain id, name, address, usedCount(the number of stocks associated with the location)
	 */
    public function findAllWithExtraProperties()
    {
        $dql = "SELECT l.id, l.name, l.address, (SELECT COUNT(s.id) FROM ContigoModelBundle:Stock s WHERE s.location = l.id) AS usedCount " .
        	   "FROM ContigoModelBundle:Location l";    	
        return $this->getEntityManager()
            ->createQuery($dql)
            ->getResult();
    }
    
    /**
     * 
     * Delete selected locations.
     * 
     * @param array $identities array of identities of selected locations.
     * @return integer the number of deleted locations.
     */
    public function delete($identities) 
    {
    	$numDeleted = 0;
    	if (!empty($identities) && is_array($identities)) {
    		$ids = implode(',', $identities);
    		$dql = "DELETE FROM ContigoModelBundle:Location l WHERE l.id IN ($ids)";
			$numDeleted = $this
				->getEntityManager()
				->createQuery($dql)
				->execute();
    	}
    	return $numDeleted;
    }
}
?>