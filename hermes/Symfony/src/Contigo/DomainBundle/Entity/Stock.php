<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Stock
 *
 * @Table(name="stock")
 * @Entity
 */
class Stock
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="stock_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $esn
     *
     * @Column(name="esn", type="string", length=50, nullable=true)
     */
    private $esn;

    /**
     * @var string $serialNumber
     *
     * @Column(name="serial_number", type="string", length=50, nullable=true)
     */
    private $serialNumber;

    /**
     * @var date $receivedDate
     *
     * @Column(name="received_date", type="date", nullable=true)
     */
    private $receivedDate;

    /**
     * @var float $gmmsCost
     *
     * @Column(name="gmms_cost", type="float", nullable=true)
     */
    private $gmmsCost;

    /**
     * @var string $gmmsCostCurrency
     *
     * @Column(name="gmms_cost_currency", type="string", length=5, nullable=true)
     */
    private $gmmsCostCurrency;

    /**
     * @var float $p2pCost
     *
     * @Column(name="p2p_cost", type="float", nullable=true)
     */
    private $p2pCost;

    /**
     * @var string $p2pCostCurrency
     *
     * @Column(name="p2p_cost_currency", type="string", length=5, nullable=true)
     */
    private $p2pCostCurrency;

    /**
     * @var string $enforaActivationCode
     *
     * @Column(name="enfora_activation_code", type="string", length=50, nullable=true)
     */
    private $enforaActivationCode;

    /**
     * @var Contigo\DomainBundle\Entity\Location
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Location")
     * @JoinColumns({
     *   @JoinColumn(name="location_id", referencedColumnName="id")
     * })
     */
    private $location;

    /**
     * @var Contigo\DomainBundle\Entity\KoreSim
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\KoreSim")
     * @JoinColumns({
     *   @JoinColumn(name="kore_sim_id", referencedColumnName="id")
     * })
     */
    private $koreSim;

    /**
     * @var Contigo\DomainBundle\Entity\Make
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Make")
     * @JoinColumns({
     *   @JoinColumn(name="make_id", referencedColumnName="id")
     * })
     */
    private $make;


}