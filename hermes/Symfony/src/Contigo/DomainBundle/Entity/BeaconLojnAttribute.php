<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\BeaconLojnAttribute
 *
 * @Table(name="beacon_lojn_attribute")
 * @Entity
 */
class BeaconLojnAttribute
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="beacon_lojn_attribute_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string $type
     *
     * @Column(name="type", type="string", length=50, nullable=true)
     */
    private $type;

    /**
     * @var text $value
     *
     * @Column(name="value", type="text", nullable=true)
     */
    private $value;

    /**
     * @var bigint $activatedTs
     *
     * @Column(name="activated_ts", type="bigint", nullable=false)
     */
    private $activatedTs;

    /**
     * @var bigint $activatedBy
     *
     * @Column(name="activated_by", type="bigint", nullable=false)
     */
    private $activatedBy;

    /**
     * @var bigint $deactivatedTs
     *
     * @Column(name="deactivated_ts", type="bigint", nullable=false)
     */
    private $deactivatedTs;

    /**
     * @var bigint $deactivatedBy
     *
     * @Column(name="deactivated_by", type="bigint", nullable=true)
     */
    private $deactivatedBy;


}