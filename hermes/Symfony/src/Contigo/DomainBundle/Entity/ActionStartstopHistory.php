<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ActionStartstopHistory
 *
 * @Table(name="action_startstop_history")
 * @Entity
 */
class ActionStartstopHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="action_startstop_history_id_seq", allocationSize="1", initialValue="1")
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
     * @var integer $stopDuration
     *
     * @Column(name="stop_duration", type="integer", nullable=true)
     */
    private $stopDuration;

    /**
     * @var integer $startDuration
     *
     * @Column(name="start_duration", type="integer", nullable=true)
     */
    private $startDuration;

    /**
     * @var decimal $speed
     *
     * @Column(name="speed", type="decimal", nullable=true)
     */
    private $speed;

    /**
     * @var string $speedUnit
     *
     * @Column(name="speed_unit", type="string", length=10, nullable=true)
     */
    private $speedUnit;

    /**
     * @var boolean $useAdvancedFeatures
     *
     * @Column(name="use_advanced_features", type="boolean", nullable=true)
     */
    private $useAdvancedFeatures;


}