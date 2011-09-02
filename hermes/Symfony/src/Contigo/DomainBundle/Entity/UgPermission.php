<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\UgPermission
 *
 * @Table(name="ug_permission")
 * @Entity
 */
class UgPermission
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="ug_permission_id_seq", allocationSize="1", initialValue="1")
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
     * @var Contigo\DomainBundle\Entity\Permission
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Permission")
     * @JoinColumns({
     *   @JoinColumn(name="permission_id", referencedColumnName="id")
     * })
     */
    private $permission;


}