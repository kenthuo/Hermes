<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\SmscFailover
 *
 * @Table(name="smsc_failover")
 * @Entity
 */
class SmscFailover
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="smsc_failover_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", nullable=true)
     */
    private $name;

    /**
     * @var string $ip
     *
     * @Column(name="ip", type="string", length=20, nullable=false)
     */
    private $ip;

    /**
     * @var integer $port
     *
     * @Column(name="port", type="integer", nullable=false)
     */
    private $port;

    /**
     * @var string $username
     *
     * @Column(name="username", type="string", length=20, nullable=false)
     */
    private $username;

    /**
     * @var string $password
     *
     * @Column(name="password", type="string", length=20, nullable=false)
     */
    private $password;

    /**
     * @var string $sysId
     *
     * @Column(name="sys_id", type="string", length=20, nullable=false)
     */
    private $sysId;

    /**
     * @var boolean $useTransceiver
     *
     * @Column(name="use_transceiver", type="boolean", nullable=false)
     */
    private $useTransceiver;

    /**
     * @var string $hostname
     *
     * @Column(name="hostname", type="string", nullable=true)
     */
    private $hostname;

    /**
     * @var string $rUsername
     *
     * @Column(name="r_username", type="string", length=20, nullable=true)
     */
    private $rUsername;

    /**
     * @var string $rPassword
     *
     * @Column(name="r_password", type="string", length=20, nullable=true)
     */
    private $rPassword;

    /**
     * @var string $rSysId
     *
     * @Column(name="r_sys_id", type="string", length=20, nullable=true)
     */
    private $rSysId;

    /**
     * @var Contigo\DomainBundle\Entity\Smsc
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Smsc")
     * @JoinColumns({
     *   @JoinColumn(name="smsc_id", referencedColumnName="id")
     * })
     */
    private $smsc;


}