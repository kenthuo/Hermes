<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\InvalidLoginAudit
 *
 * @Table(name="invalid_login_audit")
 * @Entity
 */
class InvalidLoginAudit
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="invalid_login_audit_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=false)
     */
    private $timestamp;

    /**
     * @var integer $customerId
     *
     * @Column(name="customer_id", type="integer", nullable=true)
     */
    private $customerId;

    /**
     * @var string $ip
     *
     * @Column(name="ip", type="string", length=25, nullable=true)
     */
    private $ip;

    /**
     * @var string $username
     *
     * @Column(name="username", type="string", length=100, nullable=true)
     */
    private $username;

    /**
     * @var string $password
     *
     * @Column(name="password", type="string", length=100, nullable=true)
     */
    private $password;

    /**
     * @var string $portal
     *
     * @Column(name="portal", type="string", length=25, nullable=true)
     */
    private $portal;


}