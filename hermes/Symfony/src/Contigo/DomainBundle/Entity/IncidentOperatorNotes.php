<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\IncidentOperatorNotes
 *
 * @Table(name="incident_operator_notes")
 * @Entity
 */
class IncidentOperatorNotes
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="incident_operator_notes_id_seq", allocationSize="1", initialValue="1")
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
     * @var text $notes
     *
     * @Column(name="notes", type="text", nullable=true)
     */
    private $notes;

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