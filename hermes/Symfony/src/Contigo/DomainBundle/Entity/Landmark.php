<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Landmark
 *
 * @Table(name="landmark")
 * @Entity
 */
class Landmark
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="landmark_id_seq", allocationSize="1", initialValue="1")
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
     * @var string $name
     *
     * @Column(name="name", type="string", length=65, nullable=true)
     */
    private $name;

    /**
     * @var bigint $landmarkCategoryId
     *
     * @Column(name="landmark_category_id", type="bigint", nullable=true)
     */
    private $landmarkCategoryId;

    /**
     * @var string $streetAddr
     *
     * @Column(name="street_addr", type="string", length=255, nullable=true)
     */
    private $streetAddr;

    /**
     * @var string $city
     *
     * @Column(name="city", type="string", length=150, nullable=true)
     */
    private $city;

    /**
     * @var string $state
     *
     * @Column(name="state", type="string", length=25, nullable=true)
     */
    private $state;

    /**
     * @var string $country
     *
     * @Column(name="country", type="string", length=25, nullable=true)
     */
    private $country;

    /**
     * @var string $zipCode
     *
     * @Column(name="zip_code", type="string", length=10, nullable=true)
     */
    private $zipCode;

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
     * @var string $shape
     *
     * @Column(name="shape", type="string", length=10, nullable=true)
     */
    private $shape;

    /**
     * @var decimal $radius
     *
     * @Column(name="radius", type="decimal", nullable=true)
     */
    private $radius;

    /**
     * @var boolean $isActive
     *
     * @Column(name="is_active", type="boolean", nullable=true)
     */
    private $isActive;

    /**
     * @var text $note
     *
     * @Column(name="note", type="text", nullable=true)
     */
    private $note;


}