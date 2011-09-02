<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\RoutePoints
 *
 * @Table(name="route_points")
 * @Entity
 */
class RoutePoints
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="route_points_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var decimal $lat
     *
     * @Column(name="lat", type="decimal", nullable=true)
     */
    private $lat;

    /**
     * @var decimal $lon
     *
     * @Column(name="lon", type="decimal", nullable=true)
     */
    private $lon;

    /**
     * @var bigint $sequence
     *
     * @Column(name="sequence", type="bigint", nullable=true)
     */
    private $sequence;

    /**
     * @var Contigo\DomainBundle\Entity\Route
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Route")
     * @JoinColumns({
     *   @JoinColumn(name="route_id", referencedColumnName="id")
     * })
     */
    private $route;


}