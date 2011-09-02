<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\GprsConnectionLog201007
 *
 * @Table(name="gprs_connection_log_201007")
 * @Entity
 */
class GprsConnectionLog201007
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="gprs_connection_log_201007_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $esn
     *
     * @Column(name="esn", type="string", length=30, nullable=true)
     */
    private $esn;

    /**
     * @var boolean $isConnect
     *
     * @Column(name="is_connect", type="boolean", nullable=true)
     */
    private $isConnect;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;


}