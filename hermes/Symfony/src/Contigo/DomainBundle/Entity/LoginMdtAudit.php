<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\LoginMdtAudit
 *
 * @Table(name="login_mdt_audit")
 * @Entity
 */
class LoginMdtAudit
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="login_mdt_audit_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $mdtEsn
     *
     * @Column(name="mdt_esn", type="string", length=50, nullable=true)
     */
    private $mdtEsn;

    /**
     * @var bigint $assetId
     *
     * @Column(name="asset_id", type="bigint", nullable=true)
     */
    private $assetId;

    /**
     * @var bigint $driverId
     *
     * @Column(name="driver_id", type="bigint", nullable=true)
     */
    private $driverId;

    /**
     * @var bigint $loginTimestamp
     *
     * @Column(name="login_timestamp", type="bigint", nullable=true)
     */
    private $loginTimestamp;

    /**
     * @var bigint $logoutTimestamp
     *
     * @Column(name="logout_timestamp", type="bigint", nullable=true)
     */
    private $logoutTimestamp;

    /**
     * @var boolean $isLoginFailure
     *
     * @Column(name="is_login_failure", type="boolean", nullable=true)
     */
    private $isLoginFailure;

    /**
     * @var boolean $autoLogout
     *
     * @Column(name="auto_logout", type="boolean", nullable=true)
     */
    private $autoLogout;

    /**
     * @var bigint $driverMessageId
     *
     * @Column(name="driver_message_id", type="bigint", nullable=true)
     */
    private $driverMessageId;

    /**
     * @var bigint $driverMessageTs
     *
     * @Column(name="driver_message_ts", type="bigint", nullable=true)
     */
    private $driverMessageTs;


}