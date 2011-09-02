<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\BeaconServicePlanFirstOfMonthJob
 *
 * @Table(name="beacon_service_plan_first_of_month_job")
 * @Entity
 */
class BeaconServicePlanFirstOfMonthJob
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="beacon_service_plan_first_of_month_job_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconServicePlanId
     *
     * @Column(name="beacon_service_plan_id", type="bigint", nullable=true)
     */
    private $beaconServicePlanId;

    /**
     * @var bigint $oldBeaconServicePlanId
     *
     * @Column(name="old_beacon_service_plan_id", type="bigint", nullable=true)
     */
    private $oldBeaconServicePlanId;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var string $note
     *
     * @Column(name="note", type="string", length=250, nullable=true)
     */
    private $note;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;


}