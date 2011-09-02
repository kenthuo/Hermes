<?php
namespace Contigo\ModelBundle\Repository;

use Doctrine\ORM\EntityRepository;

class PictureRepository extends EntityRepository
{    
	public function findOneByBeaconmodel($beaconmodelId)
    {
    	$picture = null;
    	$dql = 'SELECT p FROM ContigoModelBundle:Picture p WHERE p.beaconmodel = :beaconmodel';
        $query = $this->getEntityManager()
            ->createQuery($dql)
            ->setParameter('beaconmodel', $beaconmodelId)
            ->setMaxResults(1);
         try {   
            $picture = $query->getSingleResult();
         } catch (\Doctrine\Orm\NoResultException $e) {
         	$picture = null;
         }
         return $picture;
    }	
	
    /**
     * 
     * Delete selected pictures.
     * 
     * @param array $identities array of identities of selected pictures.
     * @return integer the number of deleted pictures.
     */
    public function delete($identities) 
    {
    	$numDeleted = 0;
    	if (!empty($identities) && is_array($identities)) {
    		$ids = implode(',', $identities);
    		$dql = "DELETE FROM ContigoModelBundle:Picture p WHERE p.id IN ($ids)";
			$numDeleted = $this
				->getEntityManager()
				->createQuery($dql)
				->execute();
    	}
    	return $numDeleted;
    }    
}
?>