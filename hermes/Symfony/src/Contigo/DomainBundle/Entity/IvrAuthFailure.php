<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\IvrAuthFailure
 *
 * @Table(name="ivr_auth_failure")
 * @Entity
 */
class IvrAuthFailure
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="ivr_auth_failure_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $eventTimestamp
     *
     * @Column(name="event_timestamp", type="bigint", nullable=false)
     */
    private $eventTimestamp;

    /**
     * @var string $phoneNoAttempted
     *
     * @Column(name="phone_no_attempted", type="string", length=50, nullable=true)
     */
    private $phoneNoAttempted;

    /**
     * @var string $pinAttempted
     *
     * @Column(name="pin_attempted", type="string", length=10, nullable=true)
     */
    private $pinAttempted;

    /**
     * @var string $callerClid
     *
     * @Column(name="caller_clid", type="string", length=20, nullable=true)
     */
    private $callerClid;

    /**
     * @var string $ivrDialInNo
     *
     * @Column(name="ivr_dial_in_no", type="string", length=20, nullable=true)
     */
    private $ivrDialInNo;

    /**
     * @var bigint $customerId
     *
     * @Column(name="customer_id", type="bigint", nullable=true)
     */
    private $customerId;

    /**
     * @var text $status
     *
     * @Column(name="status", type="text", nullable=true)
     */
    private $status;


}