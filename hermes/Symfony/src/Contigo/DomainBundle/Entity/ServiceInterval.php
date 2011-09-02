<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ServiceInterval
 *
 * @Table(name="service_interval")
 * @Entity
 */
class ServiceInterval
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="service_interval_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $subscriberId
     *
     * @Column(name="subscriber_id", type="bigint", nullable=true)
     */
    private $subscriberId;

    /**
     * @var bigint $organizationId
     *
     * @Column(name="organization_id", type="bigint", nullable=true)
     */
    private $organizationId;

    /**
     * @var integer $unit
     *
     * @Column(name="unit", type="integer", nullable=true)
     */
    private $unit;

    /**
     * @var string $unitOfMeasurement
     *
     * @Column(name="unit_of_measurement", type="string", length=10, nullable=true)
     */
    private $unitOfMeasurement;

    /**
     * @var bigint $maintenanceId
     *
     * @Column(name="maintenance_id", type="bigint", nullable=true)
     */
    private $maintenanceId;


}