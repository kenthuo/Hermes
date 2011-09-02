<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\IncidentLoginAudit
 *
 * @Table(name="incident_login_audit")
 * @Entity
 */
class IncidentLoginAudit
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="incident_login_audit_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $incidentId
     *
     * @Column(name="incident_id", type="bigint", nullable=true)
     */
    private $incidentId;

    /**
     * @var string $loginName
     *
     * @Column(name="login_name", type="string", length=50, nullable=true)
     */
    private $loginName;

    /**
     * @var string $passcode
     *
     * @Column(name="passcode", type="string", length=10, nullable=true)
     */
    private $passcode;

    /**
     * @var string $ip
     *
     * @Column(name="ip", type="string", length=25, nullable=true)
     */
    private $ip;

    /**
     * @var string $status
     *
     * @Column(name="status", type="string", length=25, nullable=true)
     */
    private $status;

    /**
     * @var boolean $valid
     *
     * @Column(name="valid", type="boolean", nullable=true)
     */
    private $valid;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;


}