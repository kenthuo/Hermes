<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Make
 *
 * @Table(name="make")
 * @Entity
 */
class Make
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="make_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string $version
     *
     * @Column(name="version", type="string", length=20, nullable=true)
     */
    private $version;

    /**
     * @var boolean $simRequired
     *
     * @Column(name="sim_required", type="boolean", nullable=true)
     */
    private $simRequired;

    /**
     * @var Contigo\DomainBundle\Entity\Manufacturer
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Manufacturer")
     * @JoinColumns({
     *   @JoinColumn(name="manufacturer_id", referencedColumnName="id")
     * })
     */
    private $manufacturer;


}