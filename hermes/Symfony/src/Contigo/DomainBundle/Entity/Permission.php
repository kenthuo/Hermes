<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Permission
 *
 * @Table(name="permission")
 * @Entity
 */
class Permission
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="permission_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $mnemonic
     *
     * @Column(name="mnemonic", type="string", length=40, nullable=false)
     */
    private $mnemonic;

    /**
     * @var string $description
     *
     * @Column(name="description", type="string", length=100, nullable=false)
     */
    private $description;

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
     * @var integer $dspOrder
     *
     * @Column(name="dsp_order", type="integer", nullable=true)
     */
    private $dspOrder;

    /**
     * @var string $propertyKey
     *
     * @Column(name="property_key", type="string", length=255, nullable=true)
     */
    private $propertyKey;

    /**
     * @var Contigo\DomainBundle\Entity\PermissionCategory
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\PermissionCategory")
     * @JoinColumns({
     *   @JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;

    /**
     * @var Contigo\DomainBundle\Entity\Appln
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Appln")
     * @JoinColumns({
     *   @JoinColumn(name="appln_id", referencedColumnName="id")
     * })
     */
    private $appln;


}