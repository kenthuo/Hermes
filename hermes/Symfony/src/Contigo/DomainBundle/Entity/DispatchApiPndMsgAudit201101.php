<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DispatchApiPndMsgAudit201101
 *
 * @Table(name="dispatch_api_pnd_msg_audit_201101")
 * @Entity
 */
class DispatchApiPndMsgAudit201101
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="dispatch_api_pnd_msg_audit_201101_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

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
     * @var string $beaconEsn
     *
     * @Column(name="beacon_esn", type="string", length=50, nullable=false)
     */
    private $beaconEsn;

    /**
     * @var string $pndEsn
     *
     * @Column(name="pnd_esn", type="string", length=50, nullable=false)
     */
    private $pndEsn;

    /**
     * @var bigint $driverMsgId
     *
     * @Column(name="driver_msg_id", type="bigint", nullable=true)
     */
    private $driverMsgId;

    /**
     * @var string $msgStatus
     *
     * @Column(name="msg_status", type="string", length=50, nullable=true)
     */
    private $msgStatus;

    /**
     * @var string $msgResponseType
     *
     * @Column(name="msg_response_type", type="string", length=5, nullable=true)
     */
    private $msgResponseType;

    /**
     * @var text $msgFromDriver
     *
     * @Column(name="msg_from_driver", type="text", nullable=true)
     */
    private $msgFromDriver;

    /**
     * @var string $street
     *
     * @Column(name="street", type="string", length=255, nullable=true)
     */
    private $street;

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
     * @Column(name="zip_code", type="string", length=10, nullable=true)
     */
    private $zipCode;

    /**
     * @var bigint $gpsTs
     *
     * @Column(name="gps_ts", type="bigint", nullable=true)
     */
    private $gpsTs;

    /**
     * @var bigint $networkTs
     *
     * @Column(name="network_ts", type="bigint", nullable=true)
     */
    private $networkTs;

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
     * @var float $speed
     *
     * @Column(name="speed", type="float", nullable=true)
     */
    private $speed;

    /**
     * @var float $altitude
     *
     * @Column(name="altitude", type="float", nullable=true)
     */
    private $altitude;

    /**
     * @var string $direction
     *
     * @Column(name="direction", type="string", length=10, nullable=true)
     */
    private $direction;

    /**
     * @var boolean $isValidFix
     *
     * @Column(name="is_valid_fix", type="boolean", nullable=true)
     */
    private $isValidFix;

    /**
     * @var bigint $dispatcherMsgId
     *
     * @Column(name="dispatcher_msg_id", type="bigint", nullable=true)
     */
    private $dispatcherMsgId;

    /**
     * @var string $driverId
     *
     * @Column(name="driver_id", type="string", length=50, nullable=true)
     */
    private $driverId;


}