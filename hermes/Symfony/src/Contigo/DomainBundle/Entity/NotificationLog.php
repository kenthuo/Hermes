<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\NotificationLog
 *
 * @Table(name="notification_log")
 * @Entity
 */
class NotificationLog
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="notification_log_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var text $addressee
     *
     * @Column(name="addressee", type="text", nullable=false)
     */
    private $addressee;

    /**
     * @var string $subject
     *
     * @Column(name="subject", type="string", length=300, nullable=false)
     */
    private $subject;

    /**
     * @var string $body
     *
     * @Column(name="body", type="string", length=2000, nullable=false)
     */
    private $body;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;

    /**
     * @var Contigo\DomainBundle\Entity\Beacon
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Beacon")
     * @JoinColumns({
     *   @JoinColumn(name="beacon_id", referencedColumnName="id")
     * })
     */
    private $beacon;


}