<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Incident
 *
 * @Table(name="incident")
 * @Entity
 */
class Incident
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="incident_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var string $resolutionType
     *
     * @Column(name="resolution_type", type="string", length=20, nullable=true)
     */
    private $resolutionType;

    /**
     * @var string $authorityNotified
     *
     * @Column(name="authority_notified", type="string", length=20, nullable=true)
     */
    private $authorityNotified;

    /**
     * @var text $resolution
     *
     * @Column(name="resolution", type="text", nullable=true)
     */
    private $resolution;

    /**
     * @var text $notes
     *
     * @Column(name="notes", type="text", nullable=true)
     */
    private $notes;

    /**
     * @var bigint $initTimestamp
     *
     * @Column(name="init_timestamp", type="bigint", nullable=false)
     */
    private $initTimestamp;

    /**
     * @var string $initType
     *
     * @Column(name="init_type", type="string", length=20, nullable=true)
     */
    private $initType;

    /**
     * @var string $initAuthentication
     *
     * @Column(name="init_authentication", type="string", length=20, nullable=true)
     */
    private $initAuthentication;

    /**
     * @var string $status
     *
     * @Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;

    /**
     * @var bigint $endTimestamp
     *
     * @Column(name="end_timestamp", type="bigint", nullable=true)
     */
    private $endTimestamp;

    /**
     * @var float $starttimezone
     *
     * @Column(name="starttimezone", type="float", nullable=true)
     */
    private $starttimezone;

    /**
     * @var string $startTzAbbrev
     *
     * @Column(name="start_tz_abbrev", type="string", length=4, nullable=true)
     */
    private $startTzAbbrev;

    /**
     * @var float $endtimezone
     *
     * @Column(name="endtimezone", type="float", nullable=true)
     */
    private $endtimezone;

    /**
     * @var string $endTzAbbrev
     *
     * @Column(name="end_tz_abbrev", type="string", length=4, nullable=true)
     */
    private $endTzAbbrev;

    /**
     * @var string $passcode
     *
     * @Column(name="passcode", type="string", length=10, nullable=false)
     */
    private $passcode;

    /**
     * @var Contigo\DomainBundle\Entity\Tracking
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Tracking")
     * @JoinColumns({
     *   @JoinColumn(name="tracking_id", referencedColumnName="id")
     * })
     */
    private $tracking;


}