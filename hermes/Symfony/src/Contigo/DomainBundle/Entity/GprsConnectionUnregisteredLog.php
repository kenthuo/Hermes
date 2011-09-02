<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\GprsConnectionUnregisteredLog
 *
 * @Table(name="gprs_connection_unregistered_log")
 * @Entity
 */
class GprsConnectionUnregisteredLog
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="gprs_connection_unregistered_log_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $esn
     *
     * @Column(name="esn", type="string", length=50, nullable=true)
     */
    private $esn;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=false)
     */
    private $timestamp;


}