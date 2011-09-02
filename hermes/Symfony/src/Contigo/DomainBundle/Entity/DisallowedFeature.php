<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DisallowedFeature
 *
 * @Table(name="disallowed_feature")
 * @Entity
 */
class DisallowedFeature
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="disallowed_feature_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var Contigo\DomainBundle\Entity\Feature
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Feature")
     * @JoinColumns({
     *   @JoinColumn(name="feature_id", referencedColumnName="id")
     * })
     */
    private $feature;

    /**
     * @var Contigo\DomainBundle\Entity\Beacon
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Beacon")
     * @JoinColumns({
     *   @JoinColumn(name="beacon_id", referencedColumnName="id")
     * })
     */
    private $beacon;


}