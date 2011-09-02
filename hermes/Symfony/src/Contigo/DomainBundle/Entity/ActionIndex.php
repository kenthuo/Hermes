<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ActionIndex
 *
 * @Table(name="action_index")
 * @Entity
 */
class ActionIndex
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="action_index_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $actionName
     *
     * @Column(name="action_name", type="string", length=50, nullable=true)
     */
    private $actionName;

    /**
     * @var string $className
     *
     * @Column(name="class_name", type="string", length=50, nullable=true)
     */
    private $className;

    /**
     * @var string $tableName
     *
     * @Column(name="table_name", type="string", length=50, nullable=true)
     */
    private $tableName;

    /**
     * @var string $description
     *
     * @Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string $type
     *
     * @Column(name="type", type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @var boolean $canNotifyStation
     *
     * @Column(name="can_notify_station", type="boolean", nullable=true)
     */
    private $canNotifyStation;

    /**
     * @var boolean $isScheduledEvent
     *
     * @Column(name="is_scheduled_event", type="boolean", nullable=true)
     */
    private $isScheduledEvent;

    /**
     * @var string $propertyKey
     *
     * @Column(name="property_key", type="string", length=255, nullable=true)
     */
    private $propertyKey;


}