<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\NotificationAction
 *
 * @Table(name="notification_action")
 * @Entity
 */
class NotificationAction
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="notification_action_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $actionIndexId
     *
     * @Column(name="action_index_id", type="bigint", nullable=true)
     */
    private $actionIndexId;

    /**
     * @var bigint $actionId
     *
     * @Column(name="action_id", type="bigint", nullable=true)
     */
    private $actionId;

    /**
     * @var Contigo\DomainBundle\Entity\NotificationScheme
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\NotificationScheme")
     * @JoinColumns({
     *   @JoinColumn(name="notification_scheme_id", referencedColumnName="id")
     * })
     */
    private $notificationScheme;


}