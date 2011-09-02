<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Carrier
 *
 * @Table(name="carrier")
 * @Entity
 */
class Carrier
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="carrier_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string $email
     *
     * @Column(name="email", type="string", length=35, nullable=true)
     */
    private $email;

    /**
     * @var string $prefix
     *
     * @Column(name="prefix", type="string", length=5, nullable=true)
     */
    private $prefix;

    /**
     * @var string $type
     *
     * @Column(name="type", type="string", length=10, nullable=true)
     */
    private $type;


}