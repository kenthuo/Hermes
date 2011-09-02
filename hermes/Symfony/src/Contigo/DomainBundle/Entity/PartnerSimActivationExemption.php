<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\PartnerSimActivationExemption
 *
 * @Table(name="partner_sim_activation_exemption")
 * @Entity
 */
class PartnerSimActivationExemption
{
    /**
     * @var bigint $customerId
     *
     * @Column(name="customer_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="partner_sim_activation_exemption_customer_id_seq", allocationSize="1", initialValue="1")
     */
    private $customerId;

    /**
     * @var boolean $ownOwnSim
     *
     * @Column(name="own_own_sim", type="boolean", nullable=false)
     */
    private $ownOwnSim;

    /**
     * @var boolean $partialExempt
     *
     * @Column(name="partial_exempt", type="boolean", nullable=false)
     */
    private $partialExempt;

    /**
     * @var boolean $cpFeeExempt
     *
     * @Column(name="cp_fee_exempt", type="boolean", nullable=false)
     */
    private $cpFeeExempt;

    /**
     * @var boolean $rpFeeExempt
     *
     * @Column(name="rp_fee_exempt", type="boolean", nullable=false)
     */
    private $rpFeeExempt;

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