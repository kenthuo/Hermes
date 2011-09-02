<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ActionZonePolygonVertex
 *
 * @Table(name="action_zone_polygon_vertex")
 * @Entity
 */
class ActionZonePolygonVertex
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="action_zone_polygon_vertex_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $actionZonePolygonId
     *
     * @Column(name="action_zone_polygon_id", type="bigint", nullable=false)
     */
    private $actionZonePolygonId;

    /**
     * @var smallint $vertexId
     *
     * @Column(name="vertex_id", type="smallint", nullable=true)
     */
    private $vertexId;

    /**
     * @var decimal $lon
     *
     * @Column(name="lon", type="decimal", nullable=true)
     */
    private $lon;

    /**
     * @var decimal $lat
     *
     * @Column(name="lat", type="decimal", nullable=true)
     */
    private $lat;


}