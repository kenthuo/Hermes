<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ServiceLog
 *
 * @Table(name="service_log")
 * @Entity
 */
class ServiceLog
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="service_log_id_seq", allocationSize="1", initialValue="1")
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
     * @var bigint $vapId
     *
     * @Column(name="vap_id", type="bigint", nullable=true)
     */
    private $vapId;

    /**
     * @var bigint $serviceTypeId
     *
     * @Column(name="service_type_id", type="bigint", nullable=true)
     */
    private $serviceTypeId;

    /**
     * @var integer $odometer
     *
     * @Column(name="odometer", type="integer", nullable=true)
     */
    private $odometer;

    /**
     * @var bigint $serviceTimestamp
     *
     * @Column(name="service_timestamp", type="bigint", nullable=true)
     */
    private $serviceTimestamp;

    /**
     * @var text $comments
     *
     * @Column(name="comments", type="text", nullable=true)
     */
    private $comments;

    /**
     * @var bigint $engineHours
     *
     * @Column(name="engine_hours", type="bigint", nullable=true)
     */
    private $engineHours;


}