<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\UsergpIdx
 *
 * @Table(name="usergp_idx")
 * @Entity
 */
class UsergpIdx
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
     * @var bigint $childUsergpId
     *
     * @Column(name="child_usergp_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $childUsergpId;


}