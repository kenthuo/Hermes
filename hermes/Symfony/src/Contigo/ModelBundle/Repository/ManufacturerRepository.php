<?php
namespace Contigo\ModelBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ManufacturerRepository extends EntityRepository
{
	/**
	 * Get manufacturers with extra related properties.
	 * 
	 * @return array a list of manufacturers contain id, name, usedCount(the number of makes associated with the manufacture)
	 */
    public function findAllWithExtraProperties()
    {
        $dql = "SELECT m.id, m.name, (SELECT COUNT(mk.id) FROM ContigoModelBundle:Make mk WHERE mk.manufacturer = m.id) AS usedCount " .
        	   "FROM ContigoModelBundle:Manufacturer m";    	
        return $this->getEntityManager()
            ->createQuery($dql)
            ->getResult();
    }
    
    /**
     * 
     * Delete selected manufacturers.
     * 
     * @param array $identities array of identities of selected manufacturers.
     * @return integer the number of deleted manufacturers.
     */
    public function delete($identities) 
    {
    	$numDeleted = 0;
    	if (!empty($identities) && is_array($identities)) {
    		$ids = implode(',', $identities);
    		$dql = "DELETE FROM ContigoModelBundle:Manufacturer m WHERE m.id IN ($ids)";
			$numDeleted = $this
				->getEntityManager()
				->createQuery($dql)
				->execute();
    	}
    	return $numDeleted;
    }
}
?>