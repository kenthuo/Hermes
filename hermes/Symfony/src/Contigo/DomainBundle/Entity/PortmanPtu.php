<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\PortmanPtu
 *
 * @Table(name="portman_ptu")
 * @Entity
 */
class PortmanPtu
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="portman_ptu_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var string $ip
     *
     * @Column(name="ip", type="string", length=30, nullable=true)
     */
    private $ip;

    /**
     * @var bigint $lastTrackingStopped
     *
     * @Column(name="last_tracking_stopped", type="bigint", nullable=true)
     */
    private $lastTrackingStopped;

    /**
     * @var bigint $lastLoginTimestamp
     *
     * @Column(name="last_login_timestamp", type="bigint", nullable=true)
     */
    private $lastLoginTimestamp;

    /**
     * @var string $version
     *
     * @Column(name="version", type="string", length=10, nullable=true)
     */
    private $version;


}