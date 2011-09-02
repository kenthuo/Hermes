<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\CustomerSoln
 *
 * @Table(name="customer_soln")
 * @Entity
 */
class CustomerSoln
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="customer_soln_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

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
     * @var Contigo\DomainBundle\Entity\Customer
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Customer")
     * @JoinColumns({
     *   @JoinColumn(name="customer_id", referencedColumnName="id")
     * })
     */
    private $customer;


}