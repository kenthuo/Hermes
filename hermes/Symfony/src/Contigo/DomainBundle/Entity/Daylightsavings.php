<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Daylightsavings
 *
 * @Table(name="daylightsavings")
 * @Entity
 */
class Daylightsavings
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="daylightsavings_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var float $timezone
     *
     * @Column(name="timezone", type="float", nullable=false)
     */
    private $timezone;

    /**
     * @var bigint $startdate
     *
     * @Column(name="startdate", type="bigint", nullable=true)
     */
    private $startdate;

    /**
     * @var bigint $enddate
     *
     * @Column(name="enddate", type="bigint", nullable=true)
     */
    private $enddate;


}