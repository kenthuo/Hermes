<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\SolnReport
 *
 * @Table(name="soln_report")
 * @Entity
 */
class SolnReport
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="soln_report_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $introTs
     *
     * @Column(name="intro_ts", type="bigint", nullable=false)
     */
    private $introTs;

    /**
     * @var bigint $retireTs
     *
     * @Column(name="retire_ts", type="bigint", nullable=false)
     */
    private $retireTs;

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
     * @var Contigo\DomainBundle\Entity\Reports
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Reports")
     * @JoinColumns({
     *   @JoinColumn(name="report_id", referencedColumnName="id")
     * })
     */
    private $report;


}