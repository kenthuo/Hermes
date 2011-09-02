<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ItemGrouping
 *
 * @Table(name="item_grouping")
 * @Entity
 */
class ItemGrouping
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="item_grouping_id_seq", allocationSize="1", initialValue="1")
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
     * @var Contigo\DomainBundle\Entity\Subscriber
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Subscriber")
     * @JoinColumns({
     *   @JoinColumn(name="subscriber_id", referencedColumnName="id")
     * })
     */
    private $subscriber;

    /**
     * @var Contigo\DomainBundle\Entity\Organization
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Organization")
     * @JoinColumns({
     *   @JoinColumn(name="organization_id", referencedColumnName="id")
     * })
     */
    private $organization;


}