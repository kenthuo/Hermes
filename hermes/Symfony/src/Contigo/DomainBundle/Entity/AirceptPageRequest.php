<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\AirceptPageRequest
 *
 * @Table(name="aircept_page_request")
 * @Entity
 */
class AirceptPageRequest
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="aircept_page_request_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var string $secondaryMins
     *
     * @Column(name="secondary_mins", type="string", length=100, nullable=true)
     */
    private $secondaryMins;

    /**
     * @var string $pagedMins
     *
     * @Column(name="paged_mins", type="string", length=100, nullable=true)
     */
    private $pagedMins;

    /**
     * @var string $waitMin
     *
     * @Column(name="wait_min", type="string", length=20, nullable=true)
     */
    private $waitMin;

    /**
     * @var string $seqAckId
     *
     * @Column(name="seq_ack_id", type="string", length=4, nullable=true)
     */
    private $seqAckId;

    /**
     * @var string $overallAckId
     *
     * @Column(name="overall_ack_id", type="string", length=4, nullable=true)
     */
    private $overallAckId;

    /**
     * @var integer $numRetries
     *
     * @Column(name="num_retries", type="integer", nullable=true)
     */
    private $numRetries;

    /**
     * @var integer $numRetried
     *
     * @Column(name="num_retried", type="integer", nullable=true)
     */
    private $numRetried;

    /**
     * @var integer $holdingPeriod
     *
     * @Column(name="holding_period", type="integer", nullable=true)
     */
    private $holdingPeriod;

    /**
     * @var bigint $requestTimestamp
     *
     * @Column(name="request_timestamp", type="bigint", nullable=true)
     */
    private $requestTimestamp;


}