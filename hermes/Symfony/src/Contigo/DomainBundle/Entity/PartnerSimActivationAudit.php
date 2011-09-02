<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\PartnerSimActivationAudit
 *
 * @Table(name="partner_sim_activation_audit")
 * @Entity
 */
class PartnerSimActivationAudit
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="partner_sim_activation_audit_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $customerId
     *
     * @Column(name="customer_id", type="bigint", nullable=false)
     */
    private $customerId;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     */
    private $beaconId;

    /**
     * @var string $beaconImei
     *
     * @Column(name="beacon_imei", type="string", length=50, nullable=false)
     */
    private $beaconImei;

    /**
     * @var string $simImei
     *
     * @Column(name="sim_imei", type="string", length=50, nullable=true)
     */
    private $simImei;

    /**
     * @var string $simOldMin
     *
     * @Column(name="sim_old_min", type="string", length=25, nullable=true)
     */
    private $simOldMin;

    /**
     * @var string $simNewMin
     *
     * @Column(name="sim_new_min", type="string", length=25, nullable=true)
     */
    private $simNewMin;

    /**
     * @var string $simCarrier
     *
     * @Column(name="sim_carrier", type="string", length=50, nullable=true)
     */
    private $simCarrier;

    /**
     * @var bigint $requestedTs
     *
     * @Column(name="requested_ts", type="bigint", nullable=true)
     */
    private $requestedTs;

    /**
     * @var bigint $requestedBy
     *
     * @Column(name="requested_by", type="bigint", nullable=true)
     */
    private $requestedBy;

    /**
     * @var bigint $activatedTs
     *
     * @Column(name="activated_ts", type="bigint", nullable=true)
     */
    private $activatedTs;

    /**
     * @var string $activationType
     *
     * @Column(name="activation_type", type="string", length=50, nullable=false)
     */
    private $activationType;

    /**
     * @var text $activationStatus
     *
     * @Column(name="activation_status", type="text", nullable=true)
     */
    private $activationStatus;


}