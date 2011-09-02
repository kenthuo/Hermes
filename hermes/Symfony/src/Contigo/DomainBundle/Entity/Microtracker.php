<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Microtracker
 *
 * @Table(name="microtracker")
 * @Entity
 */
class Microtracker
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="microtracker_id_seq", allocationSize="1", initialValue="1")
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
     * @var string $unitId
     *
     * @Column(name="unit_id", type="string", length=8, nullable=true)
     */
    private $unitId;

    /**
     * @var string $securityPassword
     *
     * @Column(name="security_password", type="string", nullable=true)
     */
    private $securityPassword;


}