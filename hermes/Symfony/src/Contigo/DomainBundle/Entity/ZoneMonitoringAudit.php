<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ZoneMonitoringAudit
 *
 * @Table(name="zone_monitoring_audit")
 * @Entity
 */
class ZoneMonitoringAudit
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="zone_monitoring_audit_id_seq", allocationSize="1", initialValue="1")
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
     * @var boolean $notifyStation
     *
     * @Column(name="notify_station", type="boolean", nullable=true)
     */
    private $notifyStation;

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

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;


}