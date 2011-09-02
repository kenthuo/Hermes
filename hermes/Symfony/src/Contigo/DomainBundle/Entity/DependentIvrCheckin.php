<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DependentIvrCheckin
 *
 * @Table(name="dependent_ivr_checkin")
 * @Entity
 */
class DependentIvrCheckin
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="dependent_ivr_checkin_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $dependentId
     *
     * @Column(name="dependent_id", type="bigint", nullable=false)
     */
    private $dependentId;

    /**
     * @var bigint $lastMissedChkinTs
     *
     * @Column(name="last_missed_chkin_ts", type="bigint", nullable=true)
     */
    private $lastMissedChkinTs;

    /**
     * @var boolean $isCallingOut
     *
     * @Column(name="is_calling_out", type="boolean", nullable=true)
     */
    private $isCallingOut;


}