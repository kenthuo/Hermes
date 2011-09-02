<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DependentIvr
 *
 * @Table(name="dependent_ivr")
 * @Entity
 */
class DependentIvr
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="dependent_ivr_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $locale
     *
     * @Column(name="locale", type="string", length=10, nullable=false)
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

    /**
     * @var Contigo\DomainBundle\Entity\Dependent
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Dependent")
     * @JoinColumns({
     *   @JoinColumn(name="dependent_id", referencedColumnName="id")
     * })
     */
    private $dependent;


}