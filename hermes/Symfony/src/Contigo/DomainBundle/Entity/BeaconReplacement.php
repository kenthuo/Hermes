<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\BeaconReplacement
 *
 * @Table(name="beacon_replacement")
 * @Entity
 */
class BeaconReplacement
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="beacon_replacement_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var bigint $stockId
     *
     * @Column(name="stock_id", type="bigint", nullable=true)
     */
    private $stockId;

    /**
     * @var bigint $startTimestamp
     *
     * @Column(name="start_timestamp", type="bigint", nullable=true)
     */
    private $startTimestamp;

    /**
     * @var bigint $endTimestamp
     *
     * @Column(name="end_timestamp", type="bigint", nullable=true)
     */
    private $endTimestamp;

    /**
     * @var bigint $accessListId
     *
     * @Column(name="access_list_id", type="bigint", nullable=true)
     */
    private $accessListId;

    /**
     * @var string $deviceModel
     *
     * @Column(name="device_model", type="string", length=25, nullable=true)
     */
    private $deviceModel;

    /**
     * @var string $fwVersion
     *
     * @Column(name="fw_version", type="string", length=25, nullable=true)
     */
    private $fwVersion;


}