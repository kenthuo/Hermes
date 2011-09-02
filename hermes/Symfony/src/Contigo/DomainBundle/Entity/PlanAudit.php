<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\PlanAudit
 *
 * @Table(name="plan_audit")
 * @Entity
 */
class PlanAudit
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="plan_audit_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var bigint $oldPlanId
     *
     * @Column(name="old_plan_id", type="bigint", nullable=true)
     */
    private $oldPlanId;

    /**
     * @var bigint $newPlanId
     *
     * @Column(name="new_plan_id", type="bigint", nullable=true)
     */
    private $newPlanId;

    /**
     * @var bigint $date
     *
     * @Column(name="date", type="bigint", nullable=false)
     */
    private $date;


}