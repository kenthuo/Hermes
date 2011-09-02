<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ActionAuxalarmTt
 *
 * @Table(name="action_auxalarm_tt")
 * @Entity
 */
class ActionAuxalarmTt
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="action_auxalarm_tt_id_seq", allocationSize="1", initialValue="1")
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
     * @var text $name
     *
     * @Column(name="name", type="text", nullable=true)
     */
    private $name;

    /**
     * @var text $description
     *
     * @Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string $lpaType
     *
     * @Column(name="lpa_type", type="string", nullable=true)
     */
    private $lpaType;

    /**
     * @var string $lpaName
     *
     * @Column(name="lpa_name", type="string", length=50, nullable=true)
     */
    private $lpaName;

    /**
     * @var string $mpaType
     *
     * @Column(name="mpa_type", type="string", nullable=true)
     */
    private $mpaType;

    /**
     * @var string $mpaName
     *
     * @Column(name="mpa_name", type="string", length=50, nullable=true)
     */
    private $mpaName;

    /**
     * @var integer $mpaNotification
     *
     * @Column(name="mpa_notification", type="integer", nullable=true)
     */
    private $mpaNotification;

    /**
     * @var string $hpaType
     *
     * @Column(name="hpa_type", type="string", nullable=true)
     */
    private $hpaType;

    /**
     * @var string $hpaName
     *
     * @Column(name="hpa_name", type="string", length=50, nullable=true)
     */
    private $hpaName;

    /**
     * @var integer $hpaNotification
     *
     * @Column(name="hpa_notification", type="integer", nullable=true)
     */
    private $hpaNotification;

    /**
     * @var bigint $scheduleId
     *
     * @Column(name="schedule_id", type="bigint", nullable=true)
     */
    private $scheduleId;

    /**
     * @var string $lpaRuntimeSchedule
     *
     * @Column(name="lpa_runtime_schedule", type="string", length=15, nullable=true)
     */
    private $lpaRuntimeSchedule;

    /**
     * @var boolean $mpaPcWarning
     *
     * @Column(name="mpa_pc_warning", type="boolean", nullable=true)
     */
    private $mpaPcWarning;


}