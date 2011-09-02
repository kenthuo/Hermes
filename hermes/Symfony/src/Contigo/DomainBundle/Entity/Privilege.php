<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Privilege
 *
 * @Table(name="privilege")
 * @Entity
 */
class Privilege
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="privilege_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string $description
     *
     * @Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var boolean $wUser
     *
     * @Column(name="w_user", type="boolean", nullable=true)
     */
    private $wUser;

    /**
     * @var boolean $rUser
     *
     * @Column(name="r_user", type="boolean", nullable=true)
     */
    private $rUser;

    /**
     * @var boolean $wLogin
     *
     * @Column(name="w_login", type="boolean", nullable=true)
     */
    private $wLogin;

    /**
     * @var boolean $rLogin
     *
     * @Column(name="r_login", type="boolean", nullable=true)
     */
    private $rLogin;


}