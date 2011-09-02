<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\AerisMin
 *
 * @Table(name="aeris_min")
 * @Entity
 */
class AerisMin
{
    /**
     * @var string $min
     *
     * @Column(name="min", type="string", length=10, nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="aeris_min_min_seq", allocationSize="1", initialValue="1")
     */
    private $min;

    /**
     * @var boolean $isGlobal
     *
     * @Column(name="is_global", type="boolean", nullable=true)
     */
    private $isGlobal;

    /**
     * @var boolean $isShared
     *
     * @Column(name="is_shared", type="boolean", nullable=true)
     */
    private $isShared;

    /**
     * @var bigint $airceptId
     *
     * @Column(name="aircept_id", type="bigint", nullable=true)
     */
    private $airceptId;

    /**
     * @var integer $slot
     *
     * @Column(name="slot", type="integer", nullable=true)
     */
    private $slot;

    /**
     * @var boolean $isPrimary
     *
     * @Column(name="is_primary", type="boolean", nullable=true)
     */
    private $isPrimary;


}