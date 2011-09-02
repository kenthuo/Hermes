<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\BeaconServicePlanAddon
 *
 * @Table(name="beacon_service_plan_addon")
 * @Entity
 */
class BeaconServicePlanAddon
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="beacon_service_plan_addon_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconServicePlanId
     *
     * @Column(name="beacon_service_plan_id", type="bigint", nullable=false)
     */
    private $beaconServicePlanId;

    /**
     * @var string $type
     *
     * @Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var bigint $activatedTs
     *
     * @Column(name="activated_ts", type="bigint", nullable=false)
     */
    private $activatedTs;

    /**
     * @var bigint $deactivatedTs
     *
     * @Column(name="deactivated_ts", type="bigint", nullable=false)
     */
    private $deactivatedTs;

    /**
     * @var bigint $activatedBy
     *
     * @Column(name="activated_by", type="bigint", nullable=true)
     */
    private $activatedBy;

    /**
     * @var bigint $deactivatedBy
     *
     * @Column(name="deactivated_by", type="bigint", nullable=true)
     */
    private $deactivatedBy;


}