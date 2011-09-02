<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Skypatrol
 *
 * @Table(name="skypatrol")
 * @Entity
 */
class Skypatrol
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="skypatrol_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     */
    private $beaconId;

    /**
     * @var string $cac
     *
     * @Column(name="cac", type="string", length=100, nullable=true)
     */
    private $cac;

    /**
     * @var bigint $expiry
     *
     * @Column(name="expiry", type="bigint", nullable=true)
     */
    private $expiry;

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