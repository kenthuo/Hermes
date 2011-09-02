<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ActionDewaltSetup
 *
 * @Table(name="action_dewalt_setup")
 * @Entity
 */
class ActionDewaltSetup
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="action_dewalt_setup_id_seq", allocationSize="1", initialValue="1")
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
     * @var boolean $tamperDetector
     *
     * @Column(name="tamper_detector", type="boolean", nullable=true)
     */
    private $tamperDetector;

    /**
     * @var boolean $tamperDetectorAccessory
     *
     * @Column(name="tamper_detector_accessory", type="boolean", nullable=true)
     */
    private $tamperDetectorAccessory;

    /**
     * @var boolean $doorContact
     *
     * @Column(name="door_contact", type="boolean", nullable=true)
     */
    private $doorContact;

    /**
     * @var boolean $motionDetector
     *
     * @Column(name="motion_detector", type="boolean", nullable=true)
     */
    private $motionDetector;

    /**
     * @var boolean $lowTemperature
     *
     * @Column(name="low_temperature", type="boolean", nullable=true)
     */
    private $lowTemperature;

    /**
     * @var smallint $lowTemperatureValue
     *
     * @Column(name="low_temperature_value", type="smallint", nullable=true)
     */
    private $lowTemperatureValue;

    /**
     * @var boolean $highTemperature
     *
     * @Column(name="high_temperature", type="boolean", nullable=true)
     */
    private $highTemperature;

    /**
     * @var smallint $highTemperatureValue
     *
     * @Column(name="high_temperature_value", type="smallint", nullable=true)
     */
    private $highTemperatureValue;

    /**
     * @var boolean $vibrationSensor
     *
     * @Column(name="vibration_sensor", type="boolean", nullable=true)
     */
    private $vibrationSensor;

    /**
     * @var smallint $vibrationSensorValue
     *
     * @Column(name="vibration_sensor_value", type="smallint", nullable=true)
     */
    private $vibrationSensorValue;

    /**
     * @var smallint $falseAlarmFilter
     *
     * @Column(name="false_alarm_filter", type="smallint", nullable=true)
     */
    private $falseAlarmFilter;

    /**
     * @var boolean $speakerAllChanges
     *
     * @Column(name="speaker_all_changes", type="boolean", nullable=true)
     */
    private $speakerAllChanges;

    /**
     * @var boolean $speakerAlarmSiren
     *
     * @Column(name="speaker_alarm_siren", type="boolean", nullable=true)
     */
    private $speakerAlarmSiren;

    /**
     * @var boolean $speakerPowerConnect
     *
     * @Column(name="speaker_power_connect", type="boolean", nullable=true)
     */
    private $speakerPowerConnect;

    /**
     * @var boolean $speakerArmDisarm
     *
     * @Column(name="speaker_arm_disarm", type="boolean", nullable=true)
     */
    private $speakerArmDisarm;


}