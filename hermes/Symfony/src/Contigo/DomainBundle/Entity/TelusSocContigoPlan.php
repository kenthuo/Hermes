<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\TelusSocContigoPlan
 *
 * @Table(name="telus_soc_contigo_plan")
 * @Entity
 */
class TelusSocContigoPlan
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="telus_soc_contigo_plan_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var Contigo\DomainBundle\Entity\TelusSoc
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\TelusSoc")
     * @JoinColumns({
     *   @JoinColumn(name="telus_soc_id", referencedColumnName="id")
     * })
     */
    private $telusSoc;

    /**
     * @var Contigo\DomainBundle\Entity\Plan
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Plan")
     * @JoinColumns({
     *   @JoinColumn(name="plan_id", referencedColumnName="id")
     * })
     */
    private $plan;


}