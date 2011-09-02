<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DependentIvrShiftState
 *
 * @Table(name="dependent_ivr_shift_state")
 * @Entity
 */
class DependentIvrShiftState
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="dependent_ivr_shift_state_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $dependentId
     *
     * @Column(name="dependent_id", type="bigint", nullable=false)
     */
    private $dependentId;

    /**
     * @var bigint $shiftId
     *
     * @Column(name="shift_id", type="bigint", nullable=false)
     */
    private $shiftId;

    /**
     * @var string $shiftState
     *
     * @Column(name="shift_state", type="string", length=20, nullable=false)
     */
    private $shiftState;

    /**
     * @var bigint $shiftStateTs
     *
     * @Column(name="shift_state_ts", type="bigint", nullable=false)
     */
    private $shiftStateTs;

    /**
     * @var text $note
     *
     * @Column(name="note", type="text", nullable=true)
     */
    private $note;

    /**
     * @var bigint $accessListId
     *
     * @Column(name="access_list_id", type="bigint", nullable=true)
     */
    private $accessListId;

    /**
     * @var text $endedBy
     *
     * @Column(name="ended_by", type="text", nullable=true)
     */
    private $endedBy;

    /**
     * @var bigint $lastUpdatedTs
     *
     * @Column(name="last_updated_ts", type="bigint", nullable=false)
     */
    private $lastUpdatedTs;

    /**
     * @var integer $checkInInterval
     *
     * @Column(name="check_in_interval", type="integer", nullable=true)
     */
    private $checkInInterval;


}