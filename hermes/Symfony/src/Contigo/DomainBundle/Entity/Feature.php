<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Feature
 *
 * @Table(name="feature")
 * @Entity
 */
class Feature
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="feature_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var smallint $maxAllowed
     *
     * @Column(name="max_allowed", type="smallint", nullable=true)
     */
    private $maxAllowed;

    /**
     * @var string $ioType
     *
     * @Column(name="io_type", type="string", length=20, nullable=true)
     */
    private $ioType;

    /**
     * @var integer $ioPortNum
     *
     * @Column(name="io_port_num", type="integer", nullable=true)
     */
    private $ioPortNum;

    /**
     * @var integer $priority
     *
     * @Column(name="priority", type="integer", nullable=true)
     */
    private $priority;

    /**
     * @var boolean $isVisibleCp
     *
     * @Column(name="is_visible_cp", type="boolean", nullable=true)
     */
    private $isVisibleCp;

    /**
     * @var boolean $isVisibleRp
     *
     * @Column(name="is_visible_rp", type="boolean", nullable=true)
     */
    private $isVisibleRp;

    /**
     * @var smallint $minTrkInterval
     *
     * @Column(name="min_trk_interval", type="smallint", nullable=false)
     */
    private $minTrkInterval;

    /**
     * @var Contigo\DomainBundle\Entity\ActionIndex
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\ActionIndex")
     * @JoinColumns({
     *   @JoinColumn(name="action_index_id", referencedColumnName="id")
     * })
     */
    private $actionIndex;

    /**
     * @var Contigo\DomainBundle\Entity\Beaconmodel
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Beaconmodel")
     * @JoinColumns({
     *   @JoinColumn(name="beaconmodel_id", referencedColumnName="id")
     * })
     */
    private $beaconmodel;


}