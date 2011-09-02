<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ActionSpotCheckIn
 *
 * @Table(name="action_spot_check_in")
 * @Entity
 */
class ActionSpotCheckIn
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="action_spot_check_in_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $subscriberId
     *
     * @Column(name="subscriber_id", type="bigint", nullable=true)
     */
    private $subscriberId;

    /**
     * @var bigint $organizationId
     *
     * @Column(name="organization_id", type="bigint", nullable=true)
     */
    private $organizationId;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var text $description
     *
     * @Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var boolean $timerEnabled
     *
     * @Column(name="timer_enabled", type="boolean", nullable=true)
     */
    private $timerEnabled;

    /**
     * @var string $unit
     *
     * @Column(name="unit", type="string", length=20, nullable=true)
     */
    private $unit;

    /**
     * @var integer $frequency
     *
     * @Column(name="frequency", type="integer", nullable=true)
     */
    private $frequency;


}