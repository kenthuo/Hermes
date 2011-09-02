<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ActionSendumStatus
 *
 * @Table(name="action_sendum_status")
 * @Entity
 */
class ActionSendumStatus
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="action_sendum_status_id_seq", allocationSize="1", initialValue="1")
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
     * @var string $name
     *
     * @Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var text $description
     *
     * @Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var integer $period
     *
     * @Column(name="period", type="integer", nullable=true)
     */
    private $period;

    /**
     * @var boolean $statusNotification
     *
     * @Column(name="status_notification", type="boolean", nullable=true)
     */
    private $statusNotification;

    /**
     * @var bigint $scheduleId
     *
     * @Column(name="schedule_id", type="bigint", nullable=true)
     */
    private $scheduleId;


}