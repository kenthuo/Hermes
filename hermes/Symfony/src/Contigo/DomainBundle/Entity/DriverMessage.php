<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DriverMessage
 *
 * @Table(name="driver_message")
 * @Entity
 */
class DriverMessage
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="driver_message_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var bigint $driverId
     *
     * @Column(name="driver_id", type="bigint", nullable=true)
     */
    private $driverId;

    /**
     * @var bigint $assetId
     *
     * @Column(name="asset_id", type="bigint", nullable=true)
     */
    private $assetId;

    /**
     * @var bigint $departmentId
     *
     * @Column(name="department_id", type="bigint", nullable=true)
     */
    private $departmentId;

    /**
     * @var string $msgType
     *
     * @Column(name="msg_type", type="string", length=20, nullable=false)
     */
    private $msgType;

    /**
     * @var bigint $ackToDspMsgId
     *
     * @Column(name="ack_to_dsp_msg_id", type="bigint", nullable=true)
     */
    private $ackToDspMsgId;

    /**
     * @var bigint $ackToDspMsgTs
     *
     * @Column(name="ack_to_dsp_msg_ts", type="bigint", nullable=true)
     */
    private $ackToDspMsgTs;

    /**
     * @var text $subject
     *
     * @Column(name="subject", type="text", nullable=true)
     */
    private $subject;

    /**
     * @var text $body
     *
     * @Column(name="body", type="text", nullable=true)
     */
    private $body;

    /**
     * @var bigint $readTs
     *
     * @Column(name="read_ts", type="bigint", nullable=true)
     */
    private $readTs;

    /**
     * @var bigint $readBy
     *
     * @Column(name="read_by", type="bigint", nullable=true)
     */
    private $readBy;

    /**
     * @var bigint $softDeletedTs
     *
     * @Column(name="soft_deleted_ts", type="bigint", nullable=true)
     */
    private $softDeletedTs;

    /**
     * @var bigint $softDeletedBy
     *
     * @Column(name="soft_deleted_by", type="bigint", nullable=true)
     */
    private $softDeletedBy;

    /**
     * @var string $mdtEsn
     *
     * @Column(name="mdt_esn", type="string", length=50, nullable=true)
     */
    private $mdtEsn;

    /**
     * @var bigint $mdtTimestamp
     *
     * @Column(name="mdt_timestamp", type="bigint", nullable=true)
     */
    private $mdtTimestamp;

    /**
     * @var bigint $networkTimestamp
     *
     * @Column(name="network_timestamp", type="bigint", nullable=true)
     */
    private $networkTimestamp;

    /**
     * @var string $direction
     *
     * @Column(name="direction", type="string", length=100, nullable=true)
     */
    private $direction;

    /**
     * @var decimal $lon
     *
     * @Column(name="lon", type="decimal", nullable=true)
     */
    private $lon;

    /**
     * @var decimal $lat
     *
     * @Column(name="lat", type="decimal", nullable=true)
     */
    private $lat;

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
     * @var float $timezone
     *
     * @Column(name="timezone", type="float", nullable=true)
     */
    private $timezone;

    /**
     * @var string $tzAbbrev
     *
     * @Column(name="tz_abbrev", type="string", length=4, nullable=true)
     */
    private $tzAbbrev;

    /**
     * @var boolean $isValidFix
     *
     * @Column(name="is_valid_fix", type="boolean", nullable=true)
     */
    private $isValidFix;

    /**
     * @var string $streetAddr
     *
     * @Column(name="street_addr", type="string", length=255, nullable=true)
     */
    private $streetAddr;

    /**
     * @var string $city
     *
     * @Column(name="city", type="string", length=25, nullable=true)
     */
    private $city;

    /**
     * @var string $county
     *
     * @Column(name="county", type="string", length=50, nullable=true)
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
     * @var string $paramName
     *
     * @Column(name="param_name", type="string", length=20, nullable=true)
     */
    private $paramName;

    /**
     * @var string $paramType
     *
     * @Column(name="param_type", type="string", length=20, nullable=true)
     */
    private $paramType;

    /**
     * @var string $paramValue
     *
     * @Column(name="param_value", type="string", length=20, nullable=true)
     */
    private $paramValue;

    /**
     * @var string $mdtTsRaw
     *
     * @Column(name="mdt_ts_raw", type="string", length=12, nullable=true)
     */
    private $mdtTsRaw;


}