<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ActionEvent
 *
 * @Table(name="action_event")
 * @Entity
 */
class ActionEvent
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="action_event_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $actionIndexId
     *
     * @Column(name="action_index_id", type="bigint", nullable=false)
     */
    private $actionIndexId;

    /**
     * @var bigint $eventIndexId
     *
     * @Column(name="event_index_id", type="bigint", nullable=false)
     */
    private $eventIndexId;

    /**
     * @var text $description
     *
     * @Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var boolean $isVisibleEvent
     *
     * @Column(name="is_visible_event", type="boolean", nullable=true)
     */
    private $isVisibleEvent;

    /**
     * @var string $propertyKey
     *
     * @Column(name="property_key", type="string", length=255, nullable=true)
     */
    private $propertyKey;


}