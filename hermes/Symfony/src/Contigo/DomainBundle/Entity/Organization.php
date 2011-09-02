<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Organization
 *
 * @Table(name="organization")
 * @Entity
 */
class Organization
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="organization_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $primaryLoginId
     *
     * @Column(name="primary_login_id", type="bigint", nullable=true)
     */
    private $primaryLoginId;

    /**
     * @var bigint $defaultGuardianId
     *
     * @Column(name="default_guardian_id", type="bigint", nullable=true)
     */
    private $defaultGuardianId;

    /**
     * @var string $status
     *
     * @Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;

    /**
     * @var string $contactExtention
     *
     * @Column(name="contact_extention", type="string", length=10, nullable=true)
     */
    private $contactExtention;

    /**
     * @var string $contactAreacode
     *
     * @Column(name="contact_areacode", type="string", length=4, nullable=true)
     */
    private $contactAreacode;

    /**
     * @var string $contactEmail
     *
     * @Column(name="contact_email", type="string", length=100, nullable=true)
     */
    private $contactEmail;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string $type
     *
     * @Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var string $contactName
     *
     * @Column(name="contact_name", type="string", length=255, nullable=true)
     */
    private $contactName;

    /**
     * @var string $contactNumber
     *
     * @Column(name="contact_number", type="string", length=15, nullable=true)
     */
    private $contactNumber;

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
     * @var string $faxAreacode
     *
     * @Column(name="fax_areacode", type="string", length=4, nullable=true)
     */
    private $faxAreacode;

    /**
     * @var string $faxNumber
     *
     * @Column(name="fax_number", type="string", length=20, nullable=true)
     */
    private $faxNumber;

    /**
     * @var string $faxExt
     *
     * @Column(name="fax_ext", type="string", length=10, nullable=true)
     */
    private $faxExt;

    /**
     * @var boolean $isDeptEnabled
     *
     * @Column(name="is_dept_enabled", type="boolean", nullable=false)
     */
    private $isDeptEnabled;

    /**
     * @var boolean $dexAllowed
     *
     * @Column(name="dex_allowed", type="boolean", nullable=true)
     */
    private $dexAllowed;

    /**
     * @var bigint $dexHourQuota
     *
     * @Column(name="dex_hour_quota", type="bigint", nullable=true)
     */
    private $dexHourQuota;

    /**
     * @var bigint $disclaimerAckTs
     *
     * @Column(name="disclaimer_ack_ts", type="bigint", nullable=false)
     */
    private $disclaimerAckTs;

    /**
     * @var string $locale
     *
     * @Column(name="locale", type="string", length=10, nullable=true)
     */
    private $locale;

    /**
     * @var bigint $dispatchHourQuota
     *
     * @Column(name="dispatch_hour_quota", type="bigint", nullable=true)
     */
    private $dispatchHourQuota;

    /**
     * @var text $restServerUrl
     *
     * @Column(name="rest_server_url", type="text", nullable=true)
     */
    private $restServerUrl;

    /**
     * @var Contigo\DomainBundle\Entity\Customer
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Customer")
     * @JoinColumns({
     *   @JoinColumn(name="customer_id", referencedColumnName="id")
     * })
     */
    private $customer;


}