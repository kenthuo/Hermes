<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\SubscriberHistory
 *
 * @Table(name="subscriber_history")
 * @Entity
 */
class SubscriberHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="subscriber_history_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $defaultGuardianId
     *
     * @Column(name="default_guardian_id", type="bigint", nullable=true)
     */
    private $defaultGuardianId;

    /**
     * @var bigint $customerId
     *
     * @Column(name="customer_id", type="bigint", nullable=true)
     */
    private $customerId;

    /**
     * @var string $title
     *
     * @Column(name="title", type="string", length=20, nullable=true)
     */
    private $title;

    /**
     * @var string $firstName
     *
     * @Column(name="first_name", type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @var string $initial
     *
     * @Column(name="initial", type="string", length=10, nullable=true)
     */
    private $initial;

    /**
     * @var string $lastName
     *
     * @Column(name="last_name", type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @var string $suffix
     *
     * @Column(name="suffix", type="string", length=20, nullable=true)
     */
    private $suffix;

    /**
     * @var string $streetAddr
     *
     * @Column(name="street_addr", type="string", length=255, nullable=true)
     */
    private $streetAddr;

    /**
     * @var string $city
     *
     * @Column(name="city", type="string", length=255, nullable=true)
     */
    private $city;

    /**
     * @var string $state
     *
     * @Column(name="state", type="string", length=255, nullable=true)
     */
    private $state;

    /**
     * @var string $country
     *
     * @Column(name="country", type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @var string $zipCode
     *
     * @Column(name="zip_code", type="string", length=50, nullable=true)
     */
    private $zipCode;

    /**
     * @var string $status
     *
     * @Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;

    /**
     * @var string $bldgNum
     *
     * @Column(name="bldg_num", type="string", length=10, nullable=true)
     */
    private $bldgNum;

    /**
     * @var float $timezone
     *
     * @Column(name="timezone", type="float", nullable=true)
     */
    private $timezone;

    /**
     * @var boolean $daylightSaving
     *
     * @Column(name="daylight_saving", type="boolean", nullable=true)
     */
    private $daylightSaving;

    /**
     * @var string $csNumber
     *
     * @Column(name="cs_number", type="string", length=20, nullable=true)
     */
    private $csNumber;

    /**
     * @var boolean $startupTutorial
     *
     * @Column(name="startup_tutorial", type="boolean", nullable=true)
     */
    private $startupTutorial;

    /**
     * @var bigint $xid
     *
     * @Column(name="xid", type="bigint", nullable=false)
     */
    private $xid;

    /**
     * @var boolean $isDeleted
     *
     * @Column(name="is_deleted", type="boolean", nullable=true)
     */
    private $isDeleted;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;

    /**
     * @var bigint $accessListId
     *
     * @Column(name="access_list_id", type="bigint", nullable=true)
     */
    private $accessListId;

    /**
     * @var boolean $quickStart
     *
     * @Column(name="quick_start", type="boolean", nullable=true)
     */
    private $quickStart;

    /**
     * @var string $phoneAreacode
     *
     * @Column(name="phone_areacode", type="string", length=4, nullable=true)
     */
    private $phoneAreacode;

    /**
     * @var string $phoneNumber
     *
     * @Column(name="phone_number", type="string", length=15, nullable=true)
     */
    private $phoneNumber;

    /**
     * @var string $phoneExt
     *
     * @Column(name="phone_ext", type="string", length=10, nullable=true)
     */
    private $phoneExt;

    /**
     * @var string $email
     *
     * @Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var bigint $disclaimerAckTs
     *
     * @Column(name="disclaimer_ack_ts", type="bigint", nullable=false)
     */
    private $disclaimerAckTs;


}