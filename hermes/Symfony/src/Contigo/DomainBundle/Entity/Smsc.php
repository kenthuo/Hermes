<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Smsc
 *
 * @Table(name="smsc")
 * @Entity
 */
class Smsc
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="smsc_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=20, nullable=false)
     */
    private $name;

    /**
     * @var string $shortcode
     *
     * @Column(name="shortcode", type="string", length=15, nullable=true)
     */
    private $shortcode;

    /**
     * @var string $class
     *
     * @Column(name="class", type="string", nullable=true)
     */
    private $class;


}