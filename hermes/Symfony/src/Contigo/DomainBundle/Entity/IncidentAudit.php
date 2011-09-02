<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\IncidentAudit
 *
 * @Table(name="incident_audit")
 * @Entity
 */
class IncidentAudit
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="incident_audit_id_seq", allocationSize="1", initialValue="1")
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
     * @var string $status
     *
     * @Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;

    /**
     * @var bigint $startTimestamp
     *
     * @Column(name="start_timestamp", type="bigint", nullable=true)
     */
    private $startTimestamp;

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
     * @var bigint $endTimestamp
     *
     * @Column(name="end_timestamp", type="bigint", nullable=true)
     */
    private $endTimestamp;

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


}