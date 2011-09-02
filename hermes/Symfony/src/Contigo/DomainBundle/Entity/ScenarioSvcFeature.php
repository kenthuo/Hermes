<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ScenarioSvcFeature
 *
 * @Table(name="scenario_svc_feature")
 * @Entity
 */
class ScenarioSvcFeature
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="scenario_svc_feature_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var Contigo\DomainBundle\Entity\SvcFeature
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\SvcFeature")
     * @JoinColumns({
     *   @JoinColumn(name="svc_feature_id", referencedColumnName="id")
     * })
     */
    private $svcFeature;

    /**
     * @var Contigo\DomainBundle\Entity\Scenario
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Scenario")
     * @JoinColumns({
     *   @JoinColumn(name="scenario_id", referencedColumnName="id")
     * })
     */
    private $scenario;


}