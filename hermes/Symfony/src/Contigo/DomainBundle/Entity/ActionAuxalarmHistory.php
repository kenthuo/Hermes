<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ActionAuxalarmHistory
 *
 * @Table(name="action_auxalarm_history")
 * @Entity
 */
class ActionAuxalarmHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="action_auxalarm_history_id_seq", allocationSize="1", initialValue="1")
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
     * @var bigint $xid
     *
     * @Column(name="xid", type="bigint", nullable=false)
     */
    private $xid;

    /**
     * @var boolean $isDeleted
     *
     * @Column(name="is_deleted", type="boolean", nullable=true)
     */
    private $isDeleted;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;

    /**
     * @var bigint $accessListId
     *
     * @Column(name="access_list_id", type="bigint", nullable=true)
     */
    private $accessListId;

    /**
     * @var boolean $notifyOn
     *
     * @Column(name="notify_on", type="boolean", nullable=true)
     */
    private $notifyOn;

    /**
     * @var boolean $notifyOff
     *
     * @Column(name="notify_off", type="boolean", nullable=true)
     */
    private $notifyOff;

    /**
     * @var boolean $toggle
     *
     * @Column(name="toggle", type="boolean", nullable=true)
     */
    private $toggle;

    /**
     * @var integer $ioPortNum
     *
     * @Column(name="io_port_num", type="integer", nullable=true)
     */
    private $ioPortNum;


}