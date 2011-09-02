<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\BeaconmodelPlan
 *
 * @Table(name="beaconmodel_plan")
 * @Entity
 */
class BeaconmodelPlan
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="beaconmodel_plan_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconmodelId
     *
     * @Column(name="beaconmodel_id", type="bigint", nullable=true)
     */
    private $beaconmodelId;

    /**
     * @var bigint $planId
     *
     * @Column(name="plan_id", type="bigint", nullable=true)
     */
    private $planId;

    /**
     * @var smallint $slTrackingInterval
     *
     * @Column(name="sl_tracking_interval", type="smallint", nullable=false)
     */
    private $slTrackingInterval;


}