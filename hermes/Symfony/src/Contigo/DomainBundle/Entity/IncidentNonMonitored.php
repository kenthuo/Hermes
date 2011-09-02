<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\IncidentNonMonitored
 *
 * @Table(name="incident_non_monitored")
 * @Entity
 */
class IncidentNonMonitored
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="incident_non_monitored_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var bigint $initTimestamp
     *
     * @Column(name="init_timestamp", type="bigint", nullable=true)
     */
    private $initTimestamp;

    /**
     * @var string $initType
     *
     * @Column(name="init_type", type="string", length=20, nullable=true)
     */
    private $initType;

    /**
     * @var string $status
     *
     * @Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;

    /**
     * @var string $resolutionType
     *
     * @Column(name="resolution_type", type="string", length=20, nullable=true)
     */
    private $resolutionType;

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
     * @var string $clearedBy
     *
     * @Column(name="cleared_by", type="string", length=150, nullable=true)
     */
    private $clearedBy;

    /**
     * @var bigint $accessListId
     *
     * @Column(name="access_list_id", type="bigint", nullable=true)
     */
    private $accessListId;


}