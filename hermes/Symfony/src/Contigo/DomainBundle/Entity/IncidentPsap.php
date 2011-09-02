<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\IncidentPsap
 *
 * @Table(name="incident_psap")
 * @Entity
 */
class IncidentPsap
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="incident_psap_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $incidentId
     *
     * @Column(name="incident_id", type="bigint", nullable=true)
     */
    private $incidentId;

    /**
     * @var bigint $opUserId
     *
     * @Column(name="op_user_id", type="bigint", nullable=true)
     */
    private $opUserId;

    /**
     * @var decimal $lat
     *
     * @Column(name="lat", type="decimal", nullable=true)
     */
    private $lat;

    /**
     * @var decimal $lon
     *
     * @Column(name="lon", type="decimal", nullable=true)
     */
    private $lon;

    /**
     * @var string $psapPrimaryPhone
     *
     * @Column(name="psap_primary_phone", type="string", length=15, nullable=true)
     */
    private $psapPrimaryPhone;

    /**
     * @var string $psapSecondaryPhone
     *
     * @Column(name="psap_secondary_phone", type="string", length=15, nullable=true)
     */
    private $psapSecondaryPhone;

    /**
     * @var string $psapName
     *
     * @Column(name="psap_name", type="string", length=100, nullable=true)
     */
    private $psapName;

    /**
     * @var string $psapCity
     *
     * @Column(name="psap_city", type="string", length=100, nullable=true)
     */
    private $psapCity;

    /**
     * @var string $psapState
     *
     * @Column(name="psap_state", type="string", length=10, nullable=true)
     */
    private $psapState;

    /**
     * @var string $psapZipCode
     *
     * @Column(name="psap_zip_code", type="string", length=15, nullable=true)
     */
    private $psapZipCode;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;

    /**
     * @var float $timezone
     *
     * @Column(name="timezone", type="float", nullable=true)
     */
    private $timezone;

    /**
     * @var string $tzAbbrev
     *
     * @Column(name="tz_abbrev", type="string", length=4, nullable=true)
     */
    private $tzAbbrev;


}