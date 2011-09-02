<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\SpeedMonitoring
 *
 * @Table(name="speed_monitoring")
 * @Entity
 */
class SpeedMonitoring
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="speed_monitoring_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var integer $speed
     *
     * @Column(name="speed", type="integer", nullable=false)
     */
    private $speed;

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
     * @var string $speedUnitdisplay
     *
     * @Column(name="speed_unitdisplay", type="string", length=20, nullable=true)
     */
    private $speedUnitdisplay;

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