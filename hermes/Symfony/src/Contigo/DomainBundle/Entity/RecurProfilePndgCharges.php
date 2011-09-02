<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\RecurProfilePndgCharges
 *
 * @Table(name="recur_profile_pndg_charges")
 * @Entity
 */
class RecurProfilePndgCharges
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="recur_profile_pndg_charges_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $ppalProfileid
     *
     * @Column(name="ppal_profileid", type="string", length=25, nullable=true)
     */
    private $ppalProfileid;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var bigint $planId
     *
     * @Column(name="plan_id", type="bigint", nullable=true)
     */
    private $planId;

    /**
     * @var string $planName
     *
     * @Column(name="plan_name", type="string", length=150, nullable=true)
     */
    private $planName;

    /**
     * @var float $planCost
     *
     * @Column(name="plan_cost", type="float", nullable=true)
     */
    private $planCost;

    /**
     * @var boolean $mexicoRoaming
     *
     * @Column(name="mexico_roaming", type="boolean", nullable=true)
     */
    private $mexicoRoaming;

    /**
     * @var float $mexicoRoamingCost
     *
     * @Column(name="mexico_roaming_cost", type="float", nullable=true)
     */
    private $mexicoRoamingCost;

    /**
     * @var bigint $rqtUpgradeTs
     *
     * @Column(name="rqt_upgrade_ts", type="bigint", nullable=false)
     */
    private $rqtUpgradeTs;

    /**
     * @var bigint $rqtProcessedTs
     *
     * @Column(name="rqt_processed_ts", type="bigint", nullable=false)
     */
    private $rqtProcessedTs;

    /**
     * @var bigint $rqtDeletedTs
     *
     * @Column(name="rqt_deleted_ts", type="bigint", nullable=false)
     */
    private $rqtDeletedTs;


}