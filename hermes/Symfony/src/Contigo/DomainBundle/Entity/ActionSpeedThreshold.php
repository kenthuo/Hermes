<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ActionSpeedThreshold
 *
 * @Table(name="action_speed_threshold")
 * @Entity
 */
class ActionSpeedThreshold
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="action_speed_threshold_id_seq", allocationSize="1", initialValue="1")
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
     * @var integer $speedKph
     *
     * @Column(name="speed_kph", type="integer", nullable=false)
     */
    private $speedKph;

    /**
     * @var string $boundary
     *
     * @Column(name="boundary", type="string", length=20, nullable=true)
     */
    private $boundary;

    /**
     * @var string $speedUnit
     *
     * @Column(name="speed_unit", type="string", length=20, nullable=true)
     */
    private $speedUnit;

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


}