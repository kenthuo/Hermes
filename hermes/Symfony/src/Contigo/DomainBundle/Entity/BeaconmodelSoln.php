<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\BeaconmodelSoln
 *
 * @Table(name="beaconmodel_soln")
 * @Entity
 */
class BeaconmodelSoln
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="beaconmodel_soln_id_seq", allocationSize="1", initialValue="1")
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
     * @var Contigo\DomainBundle\Entity\Beaconmodel
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Beaconmodel")
     * @JoinColumns({
     *   @JoinColumn(name="beaconmodel_id", referencedColumnName="id")
     * })
     */
    private $beaconmodel;


}