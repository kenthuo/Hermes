<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ActionZoneCircle
 *
 * @Table(name="action_zone_circle")
 * @Entity
 */
class ActionZoneCircle
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="action_zone_circle_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $subscriberId
     *
     * @Column(name="subscriber_id", type="bigint", nullable=true)
     */
    private $subscriberId;

    /**
     * @var bigint $organizationId
     *
     * @Column(name="organization_id", type="bigint", nullable=true)
     */
    private $organizationId;

    /**
     * @var decimal $centerLat
     *
     * @Column(name="center_lat", type="decimal", nullable=true)
     */
    private $centerLat;

    /**
     * @var decimal $centerLon
     *
     * @Column(name="center_lon", type="decimal", nullable=true)
     */
    private $centerLon;

    /**
     * @var integer $radiusMeters
     *
     * @Column(name="radius_meters", type="integer", nullable=true)
     */
    private $radiusMeters;

    /**
     * @var string $boundary
     *
     * @Column(name="boundary", type="string", length=20, nullable=true)
     */
    private $boundary;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var text $description
     *
     * @Column(name="description", type="text", nullable=true)
     */
    private $description;


}