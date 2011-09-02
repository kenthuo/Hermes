<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Module
 *
 * @Table(name="module")
 * @Entity
 */
class Module
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="module_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $mnemonic
     *
     * @Column(name="mnemonic", type="string", length=20, nullable=false)
     */
    private $mnemonic;

    /**
     * @var string $description
     *
     * @Column(name="description", type="string", length=50, nullable=false)
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
     * @var boolean $isVap
     *
     * @Column(name="is_vap", type="boolean", nullable=false)
     */
    private $isVap;

    /**
     * @var boolean $isDefault
     *
     * @Column(name="is_default", type="boolean", nullable=false)
     */
    private $isDefault;

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
     * @var Contigo\DomainBundle\Entity\Permission
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Permission")
     * @JoinColumns({
     *   @JoinColumn(name="permission_id", referencedColumnName="id")
     * })
     */
    private $permission;

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