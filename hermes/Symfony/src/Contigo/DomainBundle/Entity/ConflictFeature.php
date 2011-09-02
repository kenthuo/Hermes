<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ConflictFeature
 *
 * @Table(name="conflict_feature")
 * @Entity
 */
class ConflictFeature
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="conflict_feature_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var integer $maxTimeConflict
     *
     * @Column(name="max_time_conflict", type="integer", nullable=false)
     */
    private $maxTimeConflict;

    /**
     * @var Contigo\DomainBundle\Entity\Feature
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Feature")
     * @JoinColumns({
     *   @JoinColumn(name="feature_id_2", referencedColumnName="id")
     * })
     */
    private $feature2;

    /**
     * @var Contigo\DomainBundle\Entity\Feature
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Feature")
     * @JoinColumns({
     *   @JoinColumn(name="feature_id_1", referencedColumnName="id")
     * })
     */
    private $feature1;


}