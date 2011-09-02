<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\BeaconmodelHistory
 *
 * @Table(name="beaconmodel_history")
 * @Entity
 */
class BeaconmodelHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="beaconmodel_history_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var text $notes
     *
     * @Column(name="notes", type="text", nullable=true)
     */
    private $notes;

    /**
     * @var string $model
     *
     * @Column(name="model", type="string", length=100, nullable=true)
     */
    private $model;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string $type
     *
     * @Column(name="type", type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @var string $description
     *
     * @Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var float $height
     *
     * @Column(name="height", type="float", nullable=true)
     */
    private $height;

    /**
     * @var float $width
     *
     * @Column(name="width", type="float", nullable=true)
     */
    private $width;

    /**
     * @var float $depth
     *
     * @Column(name="depth", type="float", nullable=true)
     */
    private $depth;

    /**
     * @var float $weight
     *
     * @Column(name="weight", type="float", nullable=true)
     */
    private $weight;

    /**
     * @var string $color
     *
     * @Column(name="color", type="string", length=100, nullable=true)
     */
    private $color;

    /**
     * @var string $deviceTableName
     *
     * @Column(name="device_table_name", type="string", length=20, nullable=true)
     */
    private $deviceTableName;

    /**
     * @var string $version
     *
     * @Column(name="version", type="string", length=15, nullable=true)
     */
    private $version;

    /**
     * @var float $gmmsCost
     *
     * @Column(name="gmms_cost", type="float", nullable=true)
     */
    private $gmmsCost;

    /**
     * @var string $gmmsCostCurrency
     *
     * @Column(name="gmms_cost_currency", type="string", length=20, nullable=true)
     */
    private $gmmsCostCurrency;

    /**
     * @var float $p2pCost
     *
     * @Column(name="p2p_cost", type="float", nullable=true)
     */
    private $p2pCost;

    /**
     * @var string $p2pCostCurrency
     *
     * @Column(name="p2p_cost_currency", type="string", length=20, nullable=true)
     */
    private $p2pCostCurrency;

    /**
     * @var integer $maxOverlappingSen
     *
     * @Column(name="max_overlapping_sen", type="integer", nullable=true)
     */
    private $maxOverlappingSen;

    /**
     * @var integer $outputCount
     *
     * @Column(name="output_count", type="integer", nullable=true)
     */
    private $outputCount;

    /**
     * @var integer $inputCount
     *
     * @Column(name="input_count", type="integer", nullable=true)
     */
    private $inputCount;

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
     * @var boolean $isLocateTrack
     *
     * @Column(name="is_locate_track", type="boolean", nullable=true)
     */
    private $isLocateTrack;

    /**
     * @var boolean $isVisibleMap
     *
     * @Column(name="is_visible_map", type="boolean", nullable=true)
     */
    private $isVisibleMap;


}