<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Login
 *
 * @Table(name="login")
 * @Entity
 */
class Login
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="login_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

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
     * @var string $employeeNum
     *
     * @Column(name="employee_num", type="string", length=50, nullable=true)
     */
    private $employeeNum;

    /**
     * @var string $username
     *
     * @Column(name="username", type="string", length=200, nullable=false)
     */
    private $username;

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
     * @var string $description
     *
     * @Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string $email
     *
     * @Column(name="email", type="string", length=150, nullable=true)
     */
    private $email;

    /**
     * @var boolean $isAllowed
     *
     * @Column(name="is_allowed", type="boolean", nullable=true)
     */
    private $isAllowed;

    /**
     * @var string $locale
     *
     * @Column(name="locale", type="string", length=10, nullable=true)
     */
    private $locale;

    /**
     * @var Contigo\DomainBundle\Entity\Organization
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Organization")
     * @JoinColumns({
     *   @JoinColumn(name="organization_id", referencedColumnName="id")
     * })
     */
    private $organization;

    /**
     * @var Contigo\DomainBundle\Entity\Subscriber
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Subscriber")
     * @JoinColumns({
     *   @JoinColumn(name="subscriber_id", referencedColumnName="id")
     * })
     */
    private $subscriber;


}