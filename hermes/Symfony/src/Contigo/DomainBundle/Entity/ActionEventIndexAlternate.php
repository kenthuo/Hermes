<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ActionEventIndexAlternate
 *
 * @Table(name="action_event_index_alternate")
 * @Entity
 */
class ActionEventIndexAlternate
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="action_event_index_alternate_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string $description
     *
     * @Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var boolean $isSelfMonitoring
     *
     * @Column(name="is_self_monitoring", type="boolean", nullable=true)
     */
    private $isSelfMonitoring;

    /**
     * @var string $propertyKey
     *
     * @Column(name="property_key", type="string", length=255, nullable=true)
     */
    private $propertyKey;

    /**
     * @var Contigo\DomainBundle\Entity\Customer
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Customer")
     * @JoinColumns({
     *   @JoinColumn(name="partner_id", referencedColumnName="id")
     * })
     */
    private $partner;

    /**
     * @var Contigo\DomainBundle\Entity\EventIndex
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\EventIndex")
     * @JoinColumns({
     *   @JoinColumn(name="event_index_id", referencedColumnName="id")
     * })
     */
    private $eventIndex;

    /**
     * @var Contigo\DomainBundle\Entity\ActionIndex
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\ActionIndex")
     * @JoinColumns({
     *   @JoinColumn(name="action_index_id", referencedColumnName="id")
     * })
     */
    private $actionIndex;


}