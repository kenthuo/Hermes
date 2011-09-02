<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\LoginUg
 *
 * @Table(name="login_ug")
 * @Entity
 */
class LoginUg
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="login_ug_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $introTs
     *
     * @Column(name="intro_ts", type="bigint", nullable=false)
     */
    private $introTs;

    /**
     * @var bigint $retireTs
     *
     * @Column(name="retire_ts", type="bigint", nullable=false)
     */
    private $retireTs;

    /**
     * @var Contigo\DomainBundle\Entity\Usergp
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Usergp")
     * @JoinColumns({
     *   @JoinColumn(name="usergp_id", referencedColumnName="id")
     * })
     */
    private $usergp;

    /**
     * @var Contigo\DomainBundle\Entity\Login
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Login")
     * @JoinColumns({
     *   @JoinColumn(name="login_id", referencedColumnName="id")
     * })
     */
    private $login;


}