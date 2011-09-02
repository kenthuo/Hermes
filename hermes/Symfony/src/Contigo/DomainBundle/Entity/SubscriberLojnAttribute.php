<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\SubscriberLojnAttribute
 *
 * @Table(name="subscriber_lojn_attribute")
 * @Entity
 */
class SubscriberLojnAttribute
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="subscriber_lojn_attribute_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $subscriberId
     *
     * @Column(name="subscriber_id", type="bigint", nullable=false)
     */
    private $subscriberId;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var bigint $beaconActivatedTs
     *
     * @Column(name="beacon_activated_ts", type="bigint", nullable=true)
     */
    private $beaconActivatedTs;

    /**
     * @var bigint $upgradePlanState
     *
     * @Column(name="upgrade_plan_state", type="bigint", nullable=true)
     */
    private $upgradePlanState;

    /**
     * @var bigint $upgradeMexicoRoamingState
     *
     * @Column(name="upgrade_mexico_roaming_state", type="bigint", nullable=true)
     */
    private $upgradeMexicoRoamingState;

    /**
     * @var bigint $createdTs
     *
     * @Column(name="created_ts", type="bigint", nullable=true)
     */
    private $createdTs;

    /**
     * @var bigint $createdBy
     *
     * @Column(name="created_by", type="bigint", nullable=true)
     */
    private $createdBy;

    /**
     * @var bigint $noshowMexicoRoamingTipTs
     *
     * @Column(name="noshow_mexico_roaming_tip_ts", type="bigint", nullable=true)
     */
    private $noshowMexicoRoamingTipTs;

    /**
     * @var bigint $noshowProximityPlusTipTs
     *
     * @Column(name="noshow_proximity_plus_tip_ts", type="bigint", nullable=true)
     */
    private $noshowProximityPlusTipTs;

    /**
     * @var bigint $noshowRenewTipTs
     *
     * @Column(name="noshow_renew_tip_ts", type="bigint", nullable=true)
     */
    private $noshowRenewTipTs;


}