<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\UdpResources
 *
 * @Table(name="udp_resources")
 * @Entity
 */
class UdpResources
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="udp_resources_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $udpResourceName
     *
     * @Column(name="udp_resource_name", type="string", length=100, nullable=false)
     */
    private $udpResourceName;

    /**
     * @var string $virtualIp
     *
     * @Column(name="virtual_ip", type="string", length=50, nullable=true)
     */
    private $virtualIp;

    /**
     * @var bigint $timeoutMultiplier
     *
     * @Column(name="timeout_multiplier", type="bigint", nullable=true)
     */
    private $timeoutMultiplier;

    /**
     * @var smallint $listenPort
     *
     * @Column(name="listen_port", type="smallint", nullable=true)
     */
    private $listenPort;


}