<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\PortableIpCmdAcked
 *
 * @Table(name="portable_ip_cmd_acked")
 * @Entity
 */
class PortableIpCmdAcked
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="portable_ip_cmd_acked_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $uniqueId
     *
     * @Column(name="unique_id", type="string", length=100, nullable=false)
     */
    private $uniqueId;

    /**
     * @var bigint $date
     *
     * @Column(name="date", type="bigint", nullable=false)
     */
    private $date;


}