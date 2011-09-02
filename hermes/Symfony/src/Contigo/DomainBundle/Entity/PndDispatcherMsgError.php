<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\PndDispatcherMsgError
 *
 * @Table(name="pnd_dispatcher_msg_error")
 * @Entity
 */
class PndDispatcherMsgError
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="pnd_dispatcher_msg_error_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $pndDispatcherMsgId
     *
     * @Column(name="pnd_dispatcher_msg_id", type="bigint", nullable=false)
     */
    private $pndDispatcherMsgId;

    /**
     * @var string $errorCode
     *
     * @Column(name="error_code", type="string", length=100, nullable=true)
     */
    private $errorCode;

    /**
     * @var text $errorMsg
     *
     * @Column(name="error_msg", type="text", nullable=true)
     */
    private $errorMsg;

    /**
     * @var bigint $rcvdTs
     *
     * @Column(name="rcvd_ts", type="bigint", nullable=true)
     */
    private $rcvdTs;

    /**
     * @var float $timezone
     *
     * @Column(name="timezone", type="float", nullable=true)
     */
    private $timezone;

    /**
     * @var string $tzAbbrev
     *
     * @Column(name="tz_abbrev", type="string", length=5, nullable=true)
     */
    private $tzAbbrev;

    /**
     * @var bigint $pndStopAuditId
     *
     * @Column(name="pnd_stop_audit_id", type="bigint", nullable=false)
     */
    private $pndStopAuditId;


}