<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\SpeedMonitoringAudit
 *
 * @Table(name="speed_monitoring_audit")
 * @Entity
 */
class SpeedMonitoringAudit
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="speed_monitoring_audit_id_seq", allocationSize="1", initialValue="1")
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
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var integer $speed
     *
     * @Column(name="speed", type="integer", nullable=true)
     */
    private $speed;

    /**
     * @var string $boundary
     *
     * @Column(name="boundary", type="string", length=20, nullable=true)
     */
    private $boundary;

    /**
     * @var string $speedUnitdisplay
     *
     * @Column(name="speed_unitdisplay", type="string", length=20, nullable=true)
     */
    private $speedUnitdisplay;

    /**
     * @var text $emailNotification
     *
     * @Column(name="email_notification", type="text", nullable=true)
     */
    private $emailNotification;

    /**
     * @var text $smsNotification
     *
     * @Column(name="sms_notification", type="text", nullable=true)
     */
    private $smsNotification;

    /**
     * @var bigint $createDate
     *
     * @Column(name="create_date", type="bigint", nullable=true)
     */
    private $createDate;

    /**
     * @var bigint $deleteDate
     *
     * @Column(name="delete_date", type="bigint", nullable=true)
     */
    private $deleteDate;


}