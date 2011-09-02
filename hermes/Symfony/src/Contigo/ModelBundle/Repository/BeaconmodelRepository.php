<?php
namespace Contigo\ModelBundle\Repository;

use Doctrine\ORM\EntityRepository;

class BeaconmodelRepository extends EntityRepository
{
	/**
	 * Get beaconmodels with extra related properties.
	 * 
	 * @return array a list of beaconmodels contain beaconmodel object, 
	 * and mixed with usedCount(the number of beacons associated with the beaconmodel) scalar value
	 */
    public function findAllWithExtraProperties()
    {
        $dql = "SELECT bm, (SELECT COUNT(bh.id) FROM ContigoModelBundle:BeaconHistory bh WHERE bh.beaconmodel = bm.id) AS usedCount, (SELECT p.id FROM ContigoModelBundle:Picture p WHERE p.beaconmodel = bm.id) AS picture " .
        	   "FROM ContigoModelBundle:Beaconmodel bm";    	
        return $this->getEntityManager()
            ->createQuery($dql)
            ->getResult();
    }
}
?>