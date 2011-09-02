<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\SimSmsc
 *
 * @Table(name="sim_smsc")
 * @Entity
 */
class SimSmsc
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="sim_smsc_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var Contigo\DomainBundle\Entity\Smsc
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Smsc")
     * @JoinColumns({
     *   @JoinColumn(name="smsc_id", referencedColumnName="id")
     * })
     */
    private $smsc;

    /**
     * @var Contigo\DomainBundle\Entity\KoreSim
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\KoreSim")
     * @JoinColumns({
     *   @JoinColumn(name="sim_id", referencedColumnName="id")
     * })
     */
    private $sim;


}