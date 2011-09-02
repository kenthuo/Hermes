<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\TestMaster
 *
 * @Table(name="test_master")
 * @Entity
 */
class TestMaster
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="test_master_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $parentCustomerId
     *
     * @Column(name="parent_customer_id", type="bigint", nullable=true)
     */
    private $parentCustomerId;

    /**
     * @var boolean $daylightSaving
     *
     * @Column(name="daylight_saving", type="boolean", nullable=true)
     */
    private $daylightSaving;

    /**
     * @var float $timezone
     *
     * @Column(name="timezone", type="float", nullable=true)
     */
    private $timezone;

    /**
     * @var text $notes
     *
     * @Column(name="notes", type="text", nullable=true)
     */
    private $notes;

    /**
     * @var string $status
     *
     * @Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;

    /**
     * @var string $streetAddress
     *
     * @Column(name="street_address", type="string", length=100, nullable=true)
     */
    private $streetAddress;

    /**
     * @var string $city
     *
     * @Column(name="city", type="string", length=100, nullable=true)
     */
    private $city;

    /**
     * @var string $state
     *
     * @Column(name="state", type="string", length=100, nullable=true)
     */
    private $state;

    /**
     * @var string $country
     *
     * @Column(name="country", type="string", length=100, nullable=true)
     */
    private $country;

    /**
     * @var string $zipCode
     *
     * @Column(name="zip_code", type="string", length=10, nullable=true)
     */
    private $zipCode;

    /**
     * @var string $contactName
     *
     * @Column(name="contact_name", type="string", length=100, nullable=true)
     */
    private $contactName;

    /**
     * @var string $contactNumber
     *
     * @Column(name="contact_number", type="string", length=20, nullable=true)
     */
    private $contactNumber;

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
     * @var string $shortname
     *
     * @Column(name="shortname", type="string", length=255, nullable=true)
     */
    private $shortname;

    /**
     * @var string $type
     *
     * @Column(name="type", type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @var bigint $refreshFreq
     *
     * @Column(name="refresh_freq", type="bigint", nullable=true)
     */
    private $refreshFreq;

    /**
     * @var string $subdomainName
     *
     * @Column(name="subdomain_name", type="string", length=255, nullable=true)
     */
    private $subdomainName;

    /**
     * @var string $notificationEmail
     *
     * @Column(name="notification_email", type="string", length=100, nullable=true)
     */
    private $notificationEmail;

    /**
     * @var string $custServiceEmail
     *
     * @Column(name="cust_service_email", type="string", length=100, nullable=true)
     */
    private $custServiceEmail;

    /**
     * @var string $dealerPricing
     *
     * @Column(name="dealer_pricing", type="string", length=20, nullable=true)
     */
    private $dealerPricing;

    /**
     * @var integer $dpExpiry
     *
     * @Column(name="dp_expiry", type="integer", nullable=true)
     */
    private $dpExpiry;

    /**
     * @var integer $spExpiry
     *
     * @Column(name="sp_expiry", type="integer", nullable=true)
     */
    private $spExpiry;

    /**
     * @var boolean $allowAccountLogin
     *
     * @Column(name="allow_account_login", type="boolean", nullable=true)
     */
    private $allowAccountLogin;

    /**
     * @var integer $test
     *
     * @Column(name="test", type="integer", nullable=true)
     */
    private $test;


}