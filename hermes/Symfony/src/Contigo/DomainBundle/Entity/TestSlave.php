<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\TestSlave
 *
 * @Table(name="test_slave")
 * @Entity
 */
class TestSlave
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="test_slave_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $defaultGuardianId
     *
     * @Column(name="default_guardian_id", type="bigint", nullable=true)
     */
    private $defaultGuardianId;

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
     * @var Contigo\DomainBundle\Entity\TestMaster
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\TestMaster")
     * @JoinColumns({
     *   @JoinColumn(name="test_master_id", referencedColumnName="id")
     * })
     */
    private $testMaster;


}