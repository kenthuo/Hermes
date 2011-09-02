<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\SolnModule
 *
 * @Table(name="soln_module")
 * @Entity
 */
class SolnModule
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="soln_module_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $nameInSoln
     *
     * @Column(name="name_in_soln", type="string", length=40, nullable=true)
     */
    private $nameInSoln;

    /**
     * @var boolean $isMandatory
     *
     * @Column(name="is_mandatory", type="boolean", nullable=false)
     */
    private $isMandatory;

    /**
     * @var bigint $introTs
     *
     * @Column(name="intro_ts", type="bigint", nullable=false)
     */
    private $introTs;

    /**
     * @var Contigo\DomainBundle\Entity\Solution
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Solution")
     * @JoinColumns({
     *   @JoinColumn(name="solution_id", referencedColumnName="id")
     * })
     */
    private $solution;

    /**
     * @var Contigo\DomainBundle\Entity\Module
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Module")
     * @JoinColumns({
     *   @JoinColumn(name="module_id", referencedColumnName="id")
     * })
     */
    private $module;


}