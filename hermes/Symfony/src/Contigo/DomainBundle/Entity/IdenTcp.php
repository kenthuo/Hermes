<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\IdenTcp
 *
 * @Table(name="iden_tcp")
 * @Entity
 */
class IdenTcp
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="iden_tcp_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     */
    private $beaconId;

    /**
     * @var string $phoneNumber
     *
     * @Column(name="phone_number", type="string", length=16, nullable=true)
     */
    private $phoneNumber;

    /**
     * @var string $phoneModel
     *
     * @Column(name="phone_model", type="string", length=20, nullable=true)
     */
    private $phoneModel;

    /**
     * @var string $version
     *
     * @Column(name="version", type="string", length=20, nullable=true)
     */
    private $version;

    /**
     * @var string $pin
     *
     * @Column(name="pin", type="string", length=4, nullable=true)
     */
    private $pin;

    /**
     * @var string $ip
     *
     * @Column(name="ip", type="string", length=15, nullable=true)
     */
    private $ip;


}