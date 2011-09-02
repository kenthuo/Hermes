<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ActionZoneRect
 *
 * @Table(name="action_zone_rect")
 * @Entity
 */
class ActionZoneRect
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="action_zone_rect_id_seq", allocationSize="1", initialValue="1")
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
     * @var decimal $lat1
     *
     * @Column(name="lat1", type="decimal", nullable=true)
     */
    private $lat1;

    /**
     * @var decimal $lon1
     *
     * @Column(name="lon1", type="decimal", nullable=true)
     */
    private $lon1;

    /**
     * @var decimal $lat2
     *
     * @Column(name="lat2", type="decimal", nullable=true)
     */
    private $lat2;

    /**
     * @var decimal $lon2
     *
     * @Column(name="lon2", type="decimal", nullable=true)
     */
    private $lon2;

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