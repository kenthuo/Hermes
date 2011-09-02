<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\SubscriberModuleHistory
 *
 * @Table(name="subscriber_module_history")
 * @Entity
 */
class SubscriberModuleHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="subscriber_module_history_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $subscriberId
     *
     * @Column(name="subscriber_id", type="bigint", nullable=false)
     */
    private $subscriberId;

    /**
     * @var bigint $moduleId
     *
     * @Column(name="module_id", type="bigint", nullable=false)
     */
    private $moduleId;

    /**
     * @var boolean $isVisible
     *
     * @Column(name="is_visible", type="boolean", nullable=false)
     */
    private $isVisible;

    /**
     * @var boolean $isConfigurable
     *
     * @Column(name="is_configurable", type="boolean", nullable=false)
     */
    private $isConfigurable;

    /**
     * @var bigint $introTs
     *
     * @Column(name="intro_ts", type="bigint", nullable=false)
     */
    private $introTs;

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
     * @Column(name="timestamp", type="bigint", nullable=false)
     */
    private $timestamp;

    /**
     * @var bigint $accessListId
     *
     * @Column(name="access_list_id", type="bigint", nullable=true)
     */
    private $accessListId;


}