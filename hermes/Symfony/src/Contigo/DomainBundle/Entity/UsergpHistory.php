<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\UsergpHistory
 *
 * @Table(name="usergp_history")
 * @Entity
 */
class UsergpHistory
{
    /**
     * @var bigint $organizationId
     *
     * @Column(name="organization_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $organizationId;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=50, nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $name;

    /**
     * @var bigint $retireTs
     *
     * @Column(name="retire_ts", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $retireTs;

    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     */
    private $id;

    /**
     * @var bigint $parentId
     *
     * @Column(name="parent_id", type="bigint", nullable=true)
     */
    private $parentId;

    /**
     * @var string $description
     *
     * @Column(name="description", type="string", length=100, nullable=true)
     */
    private $description;

    /**
     * @var bigint $introTs
     *
     * @Column(name="intro_ts", type="bigint", nullable=false)
     */
    private $introTs;


}