<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\IdenMessage
 *
 * @Table(name="iden_message")
 * @Entity
 */
class IdenMessage
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="iden_message_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     */
    private $beaconId;

    /**
     * @var string $ip
     *
     * @Column(name="ip", type="string", length=30, nullable=true)
     */
    private $ip;

    /**
     * @var string $message
     *
     * @Column(name="message", type="string", length=100, nullable=true)
     */
    private $message;

    /**
     * @var integer $priority
     *
     * @Column(name="priority", type="integer", nullable=true)
     */
    private $priority;

    /**
     * @var boolean $isSending
     *
     * @Column(name="is_sending", type="boolean", nullable=true)
     */
    private $isSending;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;


}