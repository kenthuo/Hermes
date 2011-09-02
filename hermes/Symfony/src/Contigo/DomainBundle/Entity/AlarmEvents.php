<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\AlarmEvents
 *
 * @Table(name="alarm_events")
 * @Entity
 */
class AlarmEvents
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="alarm_events_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var Contigo\DomainBundle\Entity\Customer
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Customer")
     * @JoinColumns({
     *   @JoinColumn(name="customer_id", referencedColumnName="id")
     * })
     */
    private $customer;

    /**
     * @var Contigo\DomainBundle\Entity\ActionEvent
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\ActionEvent")
     * @JoinColumns({
     *   @JoinColumn(name="action_event_id", referencedColumnName="id")
     * })
     */
    private $actionEvent;


}