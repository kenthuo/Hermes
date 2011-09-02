<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\SvcFeatureHistory
 *
 * @Table(name="svc_feature_history")
 * @Entity
 */
class SvcFeatureHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="svc_feature_history_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $featureId
     *
     * @Column(name="feature_id", type="bigint", nullable=false)
     */
    private $featureId;

    /**
     * @var bigint $planId
     *
     * @Column(name="plan_id", type="bigint", nullable=false)
     */
    private $planId;

    /**
     * @var string $scenarioParameter
     *
     * @Column(name="scenario_parameter", type="string", length=100, nullable=true)
     */
    private $scenarioParameter;

    /**
     * @var smallint $maxTimeConflict
     *
     * @Column(name="max_time_conflict", type="smallint", nullable=false)
     */
    private $maxTimeConflict;

    /**
     * @var bigint $xid
     *
     * @Column(name="xid", type="bigint", nullable=false)
     */
    private $xid;

    /**
     * @var boolean $isDeleted
     *
     * @Column(name="is_deleted", type="boolean", nullable=true)
     */
    private $isDeleted;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=false)
     */
    private $timestamp;

    /**
     * @var bigint $accessListId
     *
     * @Column(name="access_list_id", type="bigint", nullable=true)
     */
    private $accessListId;


}