<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Stepp2NightlyInitExceptionList
 *
 * @Table(name="stepp2_nightly_init_exception_list")
 * @Entity
 */
class Stepp2NightlyInitExceptionList
{
    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="stepp2_nightly_init_exception_list_beacon_id_seq", allocationSize="1", initialValue="1")
     */
    private $beaconId;


}