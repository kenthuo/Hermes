<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DependentIvrHistory
 *
 * @Table(name="dependent_ivr_history")
 * @Entity
 */
class DependentIvrHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="dependent_ivr_history_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $dependentId
     *
     * @Column(name="dependent_id", type="bigint", nullable=false)
     */
    private $dependentId;

    /**
     * @var string $locale
     *
     * @Column(name="locale", type="string", length=10, nullable=true)
     */
    private $locale;

    /**
     * @var string $primContactNo
     *
     * @Column(name="prim_contact_no", type="string", length=20, nullable=true)
     */
    private $primContactNo;

    /**
     * @var string $pin
     *
     * @Column(name="pin", type="string", length=10, nullable=true)
     */
    private $pin;

    /**
     * @var string $dialInNo
     *
     * @Column(name="dial_in_no", type="string", length=20, nullable=true)
     */
    private $dialInNo;

    /**
     * @var bigint $eulaAcceptedOn
     *
     * @Column(name="eula_accepted_on", type="bigint", nullable=true)
     */
    private $eulaAcceptedOn;

    /**
     * @var smallint $dialInterval
     *
     * @Column(name="dial_interval", type="smallint", nullable=true)
     */
    private $dialInterval;

    /**
     * @var bigint $xid
     *
     * @Column(name="xid", type="bigint", nullable=true)
     */
    private $xid;

    /**
     * @var boolean $isDeleted
     *
     * @Column(name="is_deleted", type="boolean", nullable=true)
     */
    private $isDeleted;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;

    /**
     * @var bigint $accessListId
     *
     * @Column(name="access_list_id", type="bigint", nullable=true)
     */
    private $accessListId;

    /**
     * @var integer $minCheckinInterval
     *
     * @Column(name="min_checkin_interval", type="integer", nullable=true)
     */
    private $minCheckinInterval;

    /**
     * @var integer $maxCheckinInterval
     *
     * @Column(name="max_checkin_interval", type="integer", nullable=true)
     */
    private $maxCheckinInterval;

    /**
     * @var bigint $currentShiftIvrVoiceNoteId
     *
     * @Column(name="current_shift_ivr_voice_note_id", type="bigint", nullable=true)
     */
    private $currentShiftIvrVoiceNoteId;


}