<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\BatchExecutionStatus
 *
 * @Table(name="batch_execution_status")
 * @Entity
 */
class BatchExecutionStatus
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="batch_execution_status_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $jobId
     *
     * @Column(name="job_id", type="bigint", nullable=true)
     */
    private $jobId;

    /**
     * @var bigint $handledTimestamp
     *
     * @Column(name="handled_timestamp", type="bigint", nullable=true)
     */
    private $handledTimestamp;

    /**
     * @var bigint $startTimestamp
     *
     * @Column(name="start_timestamp", type="bigint", nullable=true)
     */
    private $startTimestamp;

    /**
     * @var bigint $endTimestamp
     *
     * @Column(name="end_timestamp", type="bigint", nullable=true)
     */
    private $endTimestamp;

    /**
     * @var integer $stateCodeId
     *
     * @Column(name="state_code_id", type="integer", nullable=true)
     */
    private $stateCodeId;

    /**
     * @var text $message
     *
     * @Column(name="message", type="text", nullable=true)
     */
    private $message;


}