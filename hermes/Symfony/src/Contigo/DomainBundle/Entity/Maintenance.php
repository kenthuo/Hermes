<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Maintenance
 *
 * @Table(name="maintenance")
 * @Entity
 */
class Maintenance
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="maintenance_id_seq", allocationSize="1", initialValue="1")
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
     * @var bigint $notificationGroupId
     *
     * @Column(name="notification_group_id", type="bigint", nullable=true)
     */
    private $notificationGroupId;

    /**
     * @var bigint $serviceTypeId
     *
     * @Column(name="service_type_id", type="bigint", nullable=true)
     */
    private $serviceTypeId;

    /**
     * @var bigint $createTimestamp
     *
     * @Column(name="create_timestamp", type="bigint", nullable=true)
     */
    private $createTimestamp;

    /**
     * @var bigint $initialTimestamp
     *
     * @Column(name="initial_timestamp", type="bigint", nullable=true)
     */
    private $initialTimestamp;

    /**
     * @var Contigo\DomainBundle\Entity\Department
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Department")
     * @JoinColumns({
     *   @JoinColumn(name="department_id", referencedColumnName="id")
     * })
     */
    private $department;


}