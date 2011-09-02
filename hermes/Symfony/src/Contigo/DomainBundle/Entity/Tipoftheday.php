<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Tipoftheday
 *
 * @Table(name="tipoftheday")
 * @Entity
 */
class Tipoftheday
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="tipoftheday_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $tip
     *
     * @Column(name="tip", type="string", length=250, nullable=false)
     */
    private $tip;

    /**
     * @var string $explanation
     *
     * @Column(name="explanation", type="string", length=250, nullable=false)
     */
    private $explanation;

    /**
     * @var string $portal
     *
     * @Column(name="portal", type="string", length=20, nullable=true)
     */
    private $portal;


}