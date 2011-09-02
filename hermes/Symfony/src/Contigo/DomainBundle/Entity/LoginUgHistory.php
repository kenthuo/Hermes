<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\LoginUgHistory
 *
 * @Table(name="login_ug_history")
 * @Entity
 */
class LoginUgHistory
{
    /**
     * @var bigint $loginId
     *
     * @Column(name="login_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $loginId;

    /**
     * @var bigint $usergpId
     *
     * @Column(name="usergp_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $usergpId;

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
     * @var bigint $introTs
     *
     * @Column(name="intro_ts", type="bigint", nullable=true)
     */
    private $introTs;


}