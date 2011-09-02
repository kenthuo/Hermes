<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\BeaconCustomSetting
 *
 * @Table(name="beacon_custom_setting")
 * @Entity
 */
class BeaconCustomSetting
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="beacon_custom_setting_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var text $customSetting
     *
     * @Column(name="custom_setting", type="text", nullable=false)
     */
    private $customSetting;

    /**
     * @var bigint $createdTs
     *
     * @Column(name="created_ts", type="bigint", nullable=false)
     */
    private $createdTs;

    /**
     * @var bigint $createdBy
     *
     * @Column(name="created_by", type="bigint", nullable=false)
     */
    private $createdBy;

    /**
     * @var bigint $terminatedTs
     *
     * @Column(name="terminated_ts", type="bigint", nullable=true)
     */
    private $terminatedTs;

    /**
     * @var bigint $terminatedBy
     *
     * @Column(name="terminated_by", type="bigint", nullable=true)
     */
    private $terminatedBy;

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