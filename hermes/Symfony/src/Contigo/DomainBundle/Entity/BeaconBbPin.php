<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\BeaconBbPin
 *
 * @Table(name="beacon_bb_pin")
 * @Entity
 */
class BeaconBbPin
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="beacon_bb_pin_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var string $pin
     *
     * @Column(name="pin", type="string", length=10, nullable=true)
     */
    private $pin;

    /**
     * @var bigint $introTs
     *
     * @Column(name="intro_ts", type="bigint", nullable=true)
     */
    private $introTs;

    /**
     * @var bigint $introBy
     *
     * @Column(name="intro_by", type="bigint", nullable=true)
     */
    private $introBy;

    /**
     * @var bigint $retireTs
     *
     * @Column(name="retire_ts", type="bigint", nullable=true)
     */
    private $retireTs;

    /**
     * @var bigint $retireBy
     *
     * @Column(name="retire_by", type="bigint", nullable=true)
     */
    private $retireBy;


}