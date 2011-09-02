<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\PhoneNotificationGroup
 *
 * @Table(name="phone_notification_group")
 * @Entity
 */
class PhoneNotificationGroup
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="phone_notification_group_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $notificationSchemeId
     *
     * @Column(name="notification_scheme_id", type="bigint", nullable=true)
     */
    private $notificationSchemeId;

    /**
     * @var bigint $phoneId
     *
     * @Column(name="phone_id", type="bigint", nullable=true)
     */
    private $phoneId;


}