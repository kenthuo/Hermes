<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Timezone
 *
 * @Table(name="timezone")
 * @Entity
 */
class Timezone
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="timezone_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var float $timezone
     *
     * @Column(name="timezone", type="float", nullable=false)
     */
    private $timezone;

    /**
     * @var string $abbreviation
     *
     * @Column(name="abbreviation", type="string", length=4, nullable=true)
     */
    private $abbreviation;

    /**
     * @var string $description
     *
     * @Column(name="description", type="string", length=100, nullable=true)
     */
    private $description;

    /**
     * @var string $propertyKey
     *
     * @Column(name="property_key", type="string", length=255, nullable=true)
     */
    private $propertyKey;


}