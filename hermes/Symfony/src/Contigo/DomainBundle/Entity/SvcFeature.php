<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\SvcFeature
 *
 * @Table(name="svc_feature")
 * @Entity
 */
class SvcFeature
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="svc_feature_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

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
     * @var Contigo\DomainBundle\Entity\Plan
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Plan")
     * @JoinColumns({
     *   @JoinColumn(name="plan_id", referencedColumnName="id")
     * })
     */
    private $plan;

    /**
     * @var Contigo\DomainBundle\Entity\Feature
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Feature")
     * @JoinColumns({
     *   @JoinColumn(name="feature_id", referencedColumnName="id")
     * })
     */
    private $feature;


}