<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Stepp2
 *
 * @Table(name="stepp2")
 * @Entity
 */
class Stepp2
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="stepp2_id_seq", allocationSize="1", initialValue="1")
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
     * @Column(name="version", type="string", length=30, nullable=true)
     */
    private $version;

    /**
     * @var boolean $useHistory
     *
     * @Column(name="use_history", type="boolean", nullable=true)
     */
    private $useHistory;

    /**
     * @var boolean $toBeReplaced
     *
     * @Column(name="to_be_replaced", type="boolean", nullable=true)
     */
    private $toBeReplaced;


}