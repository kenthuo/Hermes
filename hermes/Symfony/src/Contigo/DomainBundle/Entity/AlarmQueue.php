<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\AlarmQueue
 *
 * @Table(name="alarm_queue")
 * @Entity
 */
class AlarmQueue
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="alarm_queue_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $event
     *
     * @Column(name="event", type="string", length=20, nullable=true)
     */
    private $event;

    /**
     * @var text $emailNotification
     *
     * @Column(name="email_notification", type="text", nullable=true)
     */
    private $emailNotification;

    /**
     * @var text $smsNotification
     *
     * @Column(name="sms_notification", type="text", nullable=true)
     */
    private $smsNotification;

    /**
     * @var Contigo\DomainBundle\Entity\Customer
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Customer")
     * @JoinColumns({
     *   @JoinColumn(name="customer_id", referencedColumnName="id")
     * })
     */
    private $customer;


}