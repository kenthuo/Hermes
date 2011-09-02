<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\MakeBeaconmodel
 *
 * @Table(name="make_beaconmodel")
 * @Entity
 */
class MakeBeaconmodel
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="make_beaconmodel_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

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
     * @var Contigo\DomainBundle\Entity\Make
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Make")
     * @JoinColumns({
     *   @JoinColumn(name="make_id", referencedColumnName="id")
     * })
     */
    private $make;


}