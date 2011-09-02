<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\LastBbLoginLogout
 *
 * @Table(name="last_bb_login_logout")
 * @Entity
 */
class LastBbLoginLogout
{
    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="last_bb_login_logout_beacon_id_seq", allocationSize="1", initialValue="1")
     */
    private $beaconId;

    /**
     * @var bigint $locateId
     *
     * @Column(name="locate_id", type="bigint", nullable=true)
     */
    private $locateId;

    /**
     * @var bigint $networkTimestamp
     *
     * @Column(name="network_timestamp", type="bigint", nullable=true)
     */
    private $networkTimestamp;

    /**
     * @var decimal $lon
     *
     * @Column(name="lon", type="decimal", nullable=true)
     */
    private $lon;

    /**
     * @var decimal $lat
     *
     * @Column(name="lat", type="decimal", nullable=true)
     */
    private $lat;

    /**
     * @var boolean $isLogin
     *
     * @Column(name="is_login", type="boolean", nullable=true)
     */
    private $isLogin;


}