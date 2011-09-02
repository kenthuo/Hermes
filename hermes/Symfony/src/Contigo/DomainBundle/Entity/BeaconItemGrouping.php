<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\BeaconItemGrouping
 *
 * @Table(name="beacon_item_grouping")
 * @Entity
 */
class BeaconItemGrouping
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="beacon_item_grouping_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var Contigo\DomainBundle\Entity\ItemGrouping
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\ItemGrouping")
     * @JoinColumns({
     *   @JoinColumn(name="item_grouping_id", referencedColumnName="id")
     * })
     */
    private $itemGrouping;

    /**
     * @var Contigo\DomainBundle\Entity\Beacon
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Beacon")
     * @JoinColumns({
     *   @JoinColumn(name="beacon_id", referencedColumnName="id")
     * })
     */
    private $beacon;


}