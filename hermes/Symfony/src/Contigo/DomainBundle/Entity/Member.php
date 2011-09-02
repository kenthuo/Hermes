<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Member
 *
 * @Table(name="member")
 * @Entity
 */
class Member
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string $username
     *
     * @Column(name="username", type="string", length=100, nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $username;

    /**
     * @var boolean $daylightSaving
     *
     * @Column(name="daylight_saving", type="boolean", nullable=true)
     */
    private $daylightSaving;

    /**
     * @var string $password
     *
     * @Column(name="password", type="string", length=100, nullable=true)
     */
    private $password;

    /**
     * @var string $type
     *
     * @Column(name="type", type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @var string $firstname
     *
     * @Column(name="firstname", type="string", length=100, nullable=true)
     */
    private $firstname;

    /**
     * @var string $lastname
     *
     * @Column(name="lastname", type="string", length=100, nullable=true)
     */
    private $lastname;

    /**
     * @var string $employeeId
     *
     * @Column(name="employee_id", type="string", length=50, nullable=true)
     */
    private $employeeId;

    /**
     * @var string $phAreacode
     *
     * @Column(name="ph_areacode", type="string", length=4, nullable=true)
     */
    private $phAreacode;

    /**
     * @var string $phNumber
     *
     * @Column(name="ph_number", type="string", length=20, nullable=true)
     */
    private $phNumber;

    /**
     * @var string $phExtension
     *
     * @Column(name="ph_extension", type="string", length=4, nullable=true)
     */
    private $phExtension;

    /**
     * @var string $dateDisplayFormat
     *
     * @Column(name="date_display_format", type="string", length=20, nullable=true)
     */
    private $dateDisplayFormat;

    /**
     * @var float $timezone
     *
     * @Column(name="timezone", type="float", nullable=true)
     */
    private $timezone;

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