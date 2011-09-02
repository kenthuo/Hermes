<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ActionZonePolygonVertexHistory
 *
 * @Table(name="action_zone_polygon_vertex_history")
 * @Entity
 */
class ActionZonePolygonVertexHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="action_zone_polygon_vertex_history_id_seq", allocationSize="1", initialValue="1")
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

    /**
     * @var bigint $xid
     *
     * @Column(name="xid", type="bigint", nullable=false)
     */
    private $xid;

    /**
     * @var boolean $isDeleted
     *
     * @Column(name="is_deleted", type="boolean", nullable=true)
     */
    private $isDeleted;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;

    /**
     * @var bigint $accessListId
     *
     * @Column(name="access_list_id", type="bigint", nullable=true)
     */
    private $accessListId;


}