<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Sim
 *
 * @Table(name="sim")
 * @Entity
 */
class Sim
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="sim_id_seq", allocationSize="1", initialValue="1")
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
     * @var string $version
     *
     * @Column(name="version", type="string", length=10, nullable=true)
     */
    private $version;

    /**
     * @var bigint $lastLoginTimestamp
     *
     * @Column(name="last_login_timestamp", type="bigint", nullable=true)
     */
    private $lastLoginTimestamp;


}