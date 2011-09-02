<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Evolution
 *
 * @Table(name="evolution")
 * @Entity
 */
class Evolution
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="evolution_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     */
    private $beaconId;

    /**
     * @var bigint $lastTrackingStopped
     *
     * @Column(name="last_tracking_stopped", type="bigint", nullable=true)
     */
    private $lastTrackingStopped;

    /**
     * @var string $beaconConfiguration
     *
     * @Column(name="beacon_configuration", type="string", length=1000, nullable=true)
     */
    private $beaconConfiguration;


}