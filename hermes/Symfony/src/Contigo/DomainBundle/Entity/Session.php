<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Session
 *
 * @Table(name="session")
 * @Entity
 */
class Session
{
    /**
     * @var string $sessionId
     *
     * @Column(name="session_id", type="string", length=35, nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="session_session_id_seq", allocationSize="1", initialValue="1")
     */
    private $sessionId;

    /**
     * @var bigint $lastActivatedTimestamp
     *
     * @Column(name="last_activated_timestamp", type="bigint", nullable=true)
     */
    private $lastActivatedTimestamp;

    /**
     * @var bigint $startTimestamp
     *
     * @Column(name="start_timestamp", type="bigint", nullable=true)
     */
    private $startTimestamp;

    /**
     * @var text $data
     *
     * @Column(name="data", type="text", nullable=true)
     */
    private $data;

    /**
     * @var string $ip
     *
     * @Column(name="ip", type="string", length=25, nullable=true)
     */
    private $ip;

    /**
     * @var string $portal
     *
     * @Column(name="portal", type="string", length=20, nullable=true)
     */
    private $portal;


}