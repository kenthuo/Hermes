<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Country
 *
 * @Table(name="country")
 * @Entity
 */
class Country
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="country_id_seq", allocationSize="1", initialValue="1")
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


}