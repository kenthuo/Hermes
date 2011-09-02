<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Vap
 *
 * @Table(name="vap")
 * @Entity
 */
class Vap
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="vap_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $assetId
     *
     * @Column(name="asset_id", type="bigint", nullable=true)
     */
    private $assetId;

    /**
     * @var bigint $dependentId
     *
     * @Column(name="dependent_id", type="bigint", nullable=true)
     */
    private $dependentId;

    /**
     * @var string $itemName
     *
     * @Column(name="item_name", type="string", length=150, nullable=true)
     */
    private $itemName;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var string $beaconName
     *
     * @Column(name="beacon_name", type="string", length=150, nullable=true)
     */
    private $beaconName;

    /**
     * @var boolean $isMultiple
     *
     * @Column(name="is_multiple", type="boolean", nullable=true)
     */
    private $isMultiple;


}