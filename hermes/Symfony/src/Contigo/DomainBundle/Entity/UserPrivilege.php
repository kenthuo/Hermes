<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\UserPrivilege
 *
 * @Table(name="user_privilege")
 * @Entity
 */
class UserPrivilege
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="user_privilege_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $masterUserId
     *
     * @Column(name="master_user_id", type="bigint", nullable=true)
     */
    private $masterUserId;

    /**
     * @var bigint $privilegeId
     *
     * @Column(name="privilege_id", type="bigint", nullable=true)
     */
    private $privilegeId;


}