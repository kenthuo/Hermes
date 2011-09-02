<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Caretaker
 *
 * @Table(name="caretaker")
 * @Entity
 */
class Caretaker
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="caretaker_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $relationship
     *
     * @Column(name="relationship", type="string", length=100, nullable=true)
     */
    private $relationship;

    /**
     * @var integer $priority
     *
     * @Column(name="priority", type="integer", nullable=true)
     */
    private $priority;

    /**
     * @var Contigo\DomainBundle\Entity\Guardian
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Guardian")
     * @JoinColumns({
     *   @JoinColumn(name="guardian_id", referencedColumnName="id")
     * })
     */
    private $guardian;

    /**
     * @var Contigo\DomainBundle\Entity\Dependent
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Dependent")
     * @JoinColumns({
     *   @JoinColumn(name="dependent_id", referencedColumnName="id")
     * })
     */
    private $dependent;

    /**
     * @var Contigo\DomainBundle\Entity\Asset
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Asset")
     * @JoinColumns({
     *   @JoinColumn(name="asset_id", referencedColumnName="id")
     * })
     */
    private $asset;


}