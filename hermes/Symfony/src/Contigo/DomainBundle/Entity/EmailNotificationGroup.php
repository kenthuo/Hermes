<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\EmailNotificationGroup
 *
 * @Table(name="email_notification_group")
 * @Entity
 */
class EmailNotificationGroup
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="email_notification_group_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $notificationSchemeId
     *
     * @Column(name="notification_scheme_id", type="bigint", nullable=true)
     */
    private $notificationSchemeId;

    /**
     * @var bigint $emailId
     *
     * @Column(name="email_id", type="bigint", nullable=true)
     */
    private $emailId;


}