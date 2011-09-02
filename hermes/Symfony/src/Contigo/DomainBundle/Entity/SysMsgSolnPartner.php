<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\SysMsgSolnPartner
 *
 * @Table(name="sys_msg_soln_partner")
 * @Entity
 */
class SysMsgSolnPartner
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="sys_msg_soln_partner_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var Contigo\DomainBundle\Entity\SystemMessage
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\SystemMessage")
     * @JoinColumns({
     *   @JoinColumn(name="sys_msg_id", referencedColumnName="id")
     * })
     */
    private $sysMsg;

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
     *   @JoinColumn(name="partner_id", referencedColumnName="id")
     * })
     */
    private $partner;


}