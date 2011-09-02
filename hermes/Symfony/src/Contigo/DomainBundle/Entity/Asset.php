<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Asset
 *
 * @ORM\Table(name="asset")
 * @ORM\Entity
 */
class Asset
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="asset_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var text $other
     *
     * @Column(name="other", type="text", nullable=true)
     */
    private $other;

    /**
     * @var bigint $vZoneradius
     *
     * @Column(name="v_zoneradius", type="bigint", nullable=true)
     */
    private $vZoneradius;

    /**
     * @var string $vZoning
     *
     * @Column(name="v_zoning", type="string", length=20, nullable=true)
     */
    private $vZoning;

    /**
     * @var string $vMotiondetector
     *
     * @Column(name="v_motiondetector", type="string", length=20, nullable=true)
     */
    private $vMotiondetector;

    /**
     * @var string $serialnum
     *
     * @Column(name="serialnum", type="string", length=100, nullable=true)
     */
    private $serialnum;

    /**
     * @var string $vVin
     *
     * @Column(name="v_vin", type="string", length=50, nullable=true)
     */
    private $vVin;

    /**
     * @var string $vLicensenum
     *
     * @Column(name="v_licensenum", type="string", length=20, nullable=true)
     */
    private $vLicensenum;

    /**
     * @var string $vYear
     *
     * @Column(name="v_year", type="string", length=4, nullable=true)
     */
    private $vYear;

    /**
     * @var string $vColor
     *
     * @Column(name="v_color", type="string", length=30, nullable=true)
     */
    private $vColor;

    /**
     * @var string $vModel
     *
     * @Column(name="v_model", type="string", length=50, nullable=true)
     */
    private $vModel;

    /**
     * @var string $vMake
     *
     * @Column(name="v_make", type="string", length=50, nullable=true)
     */
    private $vMake;

    /**
     * @var string $type
     *
     * @Column(name="type", type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string $description
     *
     * @Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string $vState
     *
     * @Column(name="v_state", type="string", length=255, nullable=true)
     */
    private $vState;

    /**
     * @var string $vCountry
     *
     * @Column(name="v_country", type="string", length=255, nullable=true)
     */
    private $vCountry;

    /**
     * @var float $timezone
     *
     * @Column(name="timezone", type="float", nullable=true)
     */
    private $timezone;

    /**
     * @var boolean $daylightSaving
     *
     * @Column(name="daylight_saving", type="boolean", nullable=true)
     */
    private $daylightSaving;

    /**
     * @var bigint $iconId
     *
     * @Column(name="icon_id", type="bigint", nullable=true)
     */
    private $iconId;

    /**
     * @var integer $syncedMileage
     *
     * @Column(name="synced_mileage", type="integer", nullable=true)
     */
    private $syncedMileage;

    /**
     * @var bigint $syncedTimestamp
     *
     * @Column(name="synced_timestamp", type="bigint", nullable=true)
     */
    private $syncedTimestamp;

    /**
     * @var bigint $syncedEngineHours
     *
     * @Column(name="synced_engine_hours", type="bigint", nullable=true)
     */
    private $syncedEngineHours;

    /**
     * @var Contigo\DomainBundle\Entity\Organization
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Organization")
     * @JoinColumns({
     *   @JoinColumn(name="organization_id", referencedColumnName="id")
     * })
     */
    private $organization;

    /**
     * @var Contigo\DomainBundle\Entity\Subscriber
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Subscriber")
     * @JoinColumns({
     *   @JoinColumn(name="subscriber_id", referencedColumnName="id")
     * })
     */
    private $subscriber;


}