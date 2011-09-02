<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ZoneMonitoring
 *
 * @Table(name="zone_monitoring")
 * @Entity
 */
class ZoneMonitoring
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="zone_monitoring_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $type
     *
     * @Column(name="type", type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @var decimal $rlat1
     *
     * @Column(name="rlat1", type="decimal", nullable=true)
     */
    private $rlat1;

    /**
     * @var decimal $rlat2
     *
     * @Column(name="rlat2", type="decimal", nullable=true)
     */
    private $rlat2;

    /**
     * @var decimal $rlon1
     *
     * @Column(name="rlon1", type="decimal", nullable=true)
     */
    private $rlon1;

    /**
     * @var decimal $rlon2
     *
     * @Column(name="rlon2", type="decimal", nullable=true)
     */
    private $rlon2;

    /**
     * @var decimal $clat
     *
     * @Column(name="clat", type="decimal", nullable=true)
     */
    private $clat;

    /**
     * @var decimal $clon
     *
     * @Column(name="clon", type="decimal", nullable=true)
     */
    private $clon;

    /**
     * @var integer $cradius
     *
     * @Column(name="cradius", type="integer", nullable=true)
     */
    private $cradius;

    /**
     * @var string $boundary
     *
     * @Column(name="boundary", type="string", length=20, nullable=true)
     */
    private $boundary;

    /**
     * @var bigint $gmttimestamp
     *
     * @Column(name="gmttimestamp", type="bigint", nullable=true)
     */
    private $gmttimestamp;

    /**
     * @var boolean $isActive
     *
     * @Column(name="is_active", type="boolean", nullable=true)
     */
    private $isActive;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var integer $beginTrapId
     *
     * @Column(name="begin_trap_id", type="integer", nullable=true)
     */
    private $beginTrapId;

    /**
     * @var bigint $actionId
     *
     * @Column(name="action_id", type="bigint", nullable=true)
     */
    private $actionId;

    /**
     * @var Contigo\DomainBundle\Entity\Beacon
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Beacon")
     * @JoinColumns({
     *   @JoinColumn(name="beacon_id", referencedColumnName="id")
     * })
     */
    private $beacon;


}