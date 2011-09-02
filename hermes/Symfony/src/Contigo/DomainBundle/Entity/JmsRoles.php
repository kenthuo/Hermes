<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\JmsRoles
 *
 * @Table(name="jms_roles")
 * @Entity
 */
class JmsRoles
{
    /**
     * @var string $userid
     *
     * @Column(name="userid", type="string", length=32, nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $userid;

    /**
     * @var string $roleid
     *
     * @Column(name="roleid", type="string", length=32, nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $roleid;


}