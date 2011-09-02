<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Iden
 *
 * @Table(name="iden")
 * @Entity
 */
class Iden
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="iden_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $phoneNumber
     *
     * @Column(name="phone_number", type="string", length=20, nullable=true)
     */
    private $phoneNumber;

    /**
     * @var string $pin
     *
     * @Column(name="pin", type="string", length=20, nullable=true)
     */
    private $pin;

    /**
     * @var integer $trackIntervalSeconds
     *
     * @Column(name="track_interval_seconds", type="integer", nullable=true)
     */
    private $trackIntervalSeconds;

    /**
     * @var string $ip
     *
     * @Column(name="ip", type="string", length=20, nullable=true)
     */
    private $ip;

    /**
     * @var bigint $lastTrackingStopped
     *
     * @Column(name="last_tracking_stopped", type="bigint", nullable=true)
     */
    private $lastTrackingStopped;

    /**
     * @var string $network
     *
     * @Column(name="network", type="string", length=20, nullable=true)
     */
    private $network;

    /**
     * @var integer $lastProcessedSequence
     *
     * @Column(name="last_processed_sequence", type="integer", nullable=true)
     */
    private $lastProcessedSequence;

    /**
     * @var integer $lastSentSequence
     *
     * @Column(name="last_sent_sequence", type="integer", nullable=true)
     */
    private $lastSentSequence;

    /**
     * @var integer $listenPort
     *
     * @Column(name="listen_port", type="integer", nullable=true)
     */
    private $listenPort;

    /**
     * @var integer $sentPort
     *
     * @Column(name="sent_port", type="integer", nullable=true)
     */
    private $sentPort;

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