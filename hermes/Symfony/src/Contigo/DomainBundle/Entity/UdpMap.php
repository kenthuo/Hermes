<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\UdpMap
 *
 * @Table(name="udp_map")
 * @Entity
 */
class UdpMap
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="udp_map_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $uniqueId
     *
     * @Column(name="unique_id", type="string", length=50, nullable=false)
     */
    private $uniqueId;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var string $ip
     *
     * @Column(name="ip", type="string", nullable=true)
     */
    private $ip;

    /**
     * @var bigint $port
     *
     * @Column(name="port", type="bigint", nullable=true)
     */
    private $port;


}