<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\UgPermissionHistory
 *
 * @Table(name="ug_permission_history")
 * @Entity
 */
class UgPermissionHistory
{
    /**
     * @var bigint $usergpId
     *
     * @Column(name="usergp_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $usergpId;

    /**
     * @var bigint $permissionId
     *
     * @Column(name="permission_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $permissionId;

    /**
     * @var bigint $retireTs
     *
     * @Column(name="retire_ts", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $retireTs;

    /**
     * @var bigint $introTs
     *
     * @Column(name="intro_ts", type="bigint", nullable=false)
     */
    private $introTs;


}