<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\StateProvince
 *
 * @Table(name="state_province")
 * @Entity
 */
class StateProvince
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="state_province_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string $abbreviation
     *
     * @Column(name="abbreviation", type="string", nullable=false)
     */
    private $abbreviation;

    /**
     * @var Contigo\DomainBundle\Entity\Country
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Country")
     * @JoinColumns({
     *   @JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;


}