<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\LandmarkCategory
 *
 * @Table(name="landmark_category")
 * @Entity
 */
class LandmarkCategory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="landmark_category_id_seq", allocationSize="1", initialValue="1")
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
     * @Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var bigint $iconId
     *
     * @Column(name="icon_id", type="bigint", nullable=true)
     */
    private $iconId;

    /**
     * @var boolean $isDefault
     *
     * @Column(name="is_default", type="boolean", nullable=true)
     */
    private $isDefault;

    /**
     * @var string $status
     *
     * @Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;


}