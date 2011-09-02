<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DrvPndDriverMsg
 *
 * @Table(name="drv_pnd_driver_msg")
 * @Entity
 */
class DrvPndDriverMsg
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="drv_pnd_driver_msg_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $drvPndDispatcherMsgId
     *
     * @Column(name="drv_pnd_dispatcher_msg_id", type="bigint", nullable=true)
     */
    private $drvPndDispatcherMsgId;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     */
    private $beaconId;

    /**
     * @var bigint $assetId
     *
     * @Column(name="asset_id", type="bigint", nullable=false)
     */
    private $assetId;

    /**
     * @var bigint $departmentId
     *
     * @Column(name="department_id", type="bigint", nullable=false)
     */
    private $departmentId;

    /**
     * @var string $pndEsn
     *
     * @Column(name="pnd_esn", type="string", length=50, nullable=false)
     */
    private $pndEsn;

    /**
     * @var bigint $guardianId
     *
     * @Column(name="guardian_id", type="bigint", nullable=false)
     */
    private $guardianId;

    /**
     * @var string $driverId
     *
     * @Column(name="driver_id", type="string", length=49, nullable=false)
     */
    private $driverId;

    /**
     * @var bigint $eta
     *
     * @Column(name="eta", type="bigint", nullable=true)
     */
    private $eta;

    /**
     * @var string $responseType
     *
     * @Column(name="response_type", type="string", length=50, nullable=false)
     */
    private $responseType;

    /**
     * @var bigint $receivedTs
     *
     * @Column(name="received_ts", type="bigint", nullable=false)
     */
    private $receivedTs;

    /**
     * @var float $timezone
     *
     * @Column(name="timezone", type="float", nullable=true)
     */
    private $timezone;

    /**
     * @var string $tzAbbrev
     *
     * @Column(name="tz_abbrev", type="string", length=5, nullable=true)
     */
    private $tzAbbrev;

    /**
     * @var string $streetAddr
     *
     * @Column(name="street_addr", type="string", length=255, nullable=true)
     */
    private $streetAddr;

    /**
     * @var string $city
     *
     * @Column(name="city", type="string", length=150, nullable=true)
     */
    private $city;

    /**
     * @var string $county
     *
     * @Column(name="county", type="string", length=150, nullable=true)
     */
    private $county;

    /**
     * @var string $state
     *
     * @Column(name="state", type="string", length=25, nullable=true)
     */
    private $state;

    /**
     * @var string $country
     *
     * @Column(name="country", type="string", length=25, nullable=true)
     */
    private $country;

    /**
     * @var string $zipCode
     *
     * @Column(name="zip_code", type="string", length=25, nullable=true)
     */
    private $zipCode;

    /**
     * @var decimal $lat
     *
     * @Column(name="lat", type="decimal", nullable=true)
     */
    private $lat;

    /**
     * @var decimal $lon
     *
     * @Column(name="lon", type="decimal", nullable=true)
     */
    private $lon;

    /**
     * @var float $altitude
     *
     * @Column(name="altitude", type="float", nullable=true)
     */
    private $altitude;

    /**
     * @var float $speed
     *
     * @Column(name="speed", type="float", nullable=true)
     */
    private $speed;

    /**
     * @var string $direction
     *
     * @Column(name="direction", type="string", length=10, nullable=true)
     */
    private $direction;

    /**
     * @var string $status
     *
     * @Column(name="status", type="string", length=50, nullable=true)
     */
    private $status;

    /**
     * @var decimal $pndLat
     *
     * @Column(name="pnd_lat", type="decimal", nullable=true)
     */
    private $pndLat;

    /**
     * @var decimal $pndLon
     *
     * @Column(name="pnd_lon", type="decimal", nullable=true)
     */
    private $pndLon;

    /**
     * @var bigint $pndMsgAuditId
     *
     * @Column(name="pnd_msg_audit_id", type="bigint", nullable=false)
     */
    private $pndMsgAuditId;

    /**
     * @var text $message
     *
     * @Column(name="message", type="text", nullable=true)
     */
    private $message;


}