<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ActionAuxOutput
 *
 * @Table(name="action_aux_output")
 * @Entity
 */
class ActionAuxOutput
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="action_aux_output_id_seq", allocationSize="1", initialValue="1")
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
     * @var string $type
     *
     * @Column(name="type", type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @var integer $pulseDuration
     *
     * @Column(name="pulse_duration", type="integer", nullable=true)
     */
    private $pulseDuration;

    /**
     * @var boolean $toggleOn
     *
     * @Column(name="toggle_on", type="boolean", nullable=true)
     */
    private $toggleOn;

    /**
     * @var integer $outputNumber
     *
     * @Column(name="output_number", type="integer", nullable=true)
     */
    private $outputNumber;

    /**
     * @var boolean $isTriggerConfig
     *
     * @Column(name="is_trigger_config", type="boolean", nullable=true)
     */
    private $isTriggerConfig;

    /**
     * @var integer $validityDuration
     *
     * @Column(name="validity_duration", type="integer", nullable=true)
     */
    private $validityDuration;

    /**
     * @var string $validityUnits
     *
     * @Column(name="validity_units", type="string", length=10, nullable=true)
     */
    private $validityUnits;

    /**
     * @var string $pulseLabel
     *
     * @Column(name="pulse_label", type="string", length=25, nullable=true)
     */
    private $pulseLabel;

    /**
     * @var string $toggleOnLabel
     *
     * @Column(name="toggle_on_label", type="string", length=25, nullable=true)
     */
    private $toggleOnLabel;

    /**
     * @var string $toggleOffLabel
     *
     * @Column(name="toggle_off_label", type="string", length=25, nullable=true)
     */
    private $toggleOffLabel;


}