<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\HaGpsDest
 *
 * @Table(name="ha_gps_dest")
 * @Entity
 */
class HaGpsDest
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="ha_gps_dest_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string $description
     *
     * @Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string $ip
     *
     * @Column(name="ip", type="string", length=15, nullable=true)
     */
    private $ip;

    /**
     * @var string $port
     *
     * @Column(name="port", type="string", length=6, nullable=true)
     */
    private $port;


}