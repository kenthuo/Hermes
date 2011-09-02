<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Sendum
 *
 * @Table(name="sendum")
 * @Entity
 */
class Sendum
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="sendum_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var string $phoneNumber
     *
     * @Column(name="phone_number", type="string", length=20, nullable=true)
     */
    private $phoneNumber;

    /**
     * @var integer $haGpsDestId
     *
     * @Column(name="ha_gps_dest_id", type="integer", nullable=true)
     */
    private $haGpsDestId;

    /**
     * @var smallint $isUserplane
     *
     * @Column(name="is_userplane", type="smallint", nullable=true)
     */
    private $isUserplane;

    /**
     * @var smallint $isControlplane
     *
     * @Column(name="is_controlplane", type="smallint", nullable=true)
     */
    private $isControlplane;

    /**
     * @var smallint $isPanic
     *
     * @Column(name="is_panic", type="smallint", nullable=true)
     */
    private $isPanic;

    /**
     * @var string $msid
     *
     * @Column(name="msid", type="string", length=255, nullable=true)
     */
    private $msid;

    /**
     * @var string $dynamicBrewId
     *
     * @Column(name="dynamic_brew_id", type="string", nullable=true)
     */
    private $dynamicBrewId;


}