<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\AirceptPageAudit
 *
 * @Table(name="aircept_page_audit")
 * @Entity
 */
class AirceptPageAudit
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="aircept_page_audit_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var string $primaryMin
     *
     * @Column(name="primary_min", type="string", length=12, nullable=true)
     */
    private $primaryMin;

    /**
     * @var string $secondaryMin
     *
     * @Column(name="secondary_min", type="string", length=12, nullable=true)
     */
    private $secondaryMin;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;


}