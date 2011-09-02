<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\AirceptDataAudit
 *
 * @Table(name="aircept_data_audit")
 * @Entity
 */
class AirceptDataAudit
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="aircept_data_audit_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var bigint $subscriberId
     *
     * @Column(name="subscriber_id", type="bigint", nullable=true)
     */
    private $subscriberId;

    /**
     * @var bigint $orgId
     *
     * @Column(name="org_id", type="bigint", nullable=true)
     */
    private $orgId;

    /**
     * @var string $esn
     *
     * @Column(name="esn", type="string", length=15, nullable=true)
     */
    private $esn;

    /**
     * @var string $dig
     *
     * @Column(name="dig", type="string", length=30, nullable=true)
     */
    private $dig;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;


}