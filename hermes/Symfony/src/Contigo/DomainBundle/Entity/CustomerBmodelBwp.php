<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\CustomerBmodelBwp
 *
 * @Table(name="customer_bmodel_bwp")
 * @Entity
 */
class CustomerBmodelBwp
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="customer_bmodel_bwp_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var Contigo\DomainBundle\Entity\BwpPlan
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\BwpPlan")
     * @JoinColumns({
     *   @JoinColumn(name="bwp_plan_id", referencedColumnName="id")
     * })
     */
    private $bwpPlan;

    /**
     * @var Contigo\DomainBundle\Entity\Beaconmodel
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Beaconmodel")
     * @JoinColumns({
     *   @JoinColumn(name="beaconmodel_id", referencedColumnName="id")
     * })
     */
    private $beaconmodel;

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