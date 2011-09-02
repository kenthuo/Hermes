<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\IdenTcpLogonoff
 *
 * @Table(name="iden_tcp_logonoff")
 * @Entity
 */
class IdenTcpLogonoff
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="iden_tcp_logonoff_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     */
    private $beaconId;

    /**
     * @var boolean $isLogon
     *
     * @Column(name="is_logon", type="boolean", nullable=true)
     */
    private $isLogon;

    /**
     * @var bigint $phpTimestamp
     *
     * @Column(name="php_timestamp", type="bigint", nullable=true)
     */
    private $phpTimestamp;


}