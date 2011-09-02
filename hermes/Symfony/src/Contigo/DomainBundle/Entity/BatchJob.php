<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\BatchJob
 *
 * @Table(name="batch_job")
 * @Entity
 */
class BatchJob
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="batch_job_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $createdTimestamp
     *
     * @Column(name="created_timestamp", type="bigint", nullable=true)
     */
    private $createdTimestamp;

    /**
     * @var bigint $modifiedTimestamp
     *
     * @Column(name="modified_timestamp", type="bigint", nullable=true)
     */
    private $modifiedTimestamp;

    /**
     * @var integer $state
     *
     * @Column(name="state", type="integer", nullable=true)
     */
    private $state;

    /**
     * @var bytea $job
     *
     * @Column(name="job", type="bytea", nullable=true)
     */
    private $job;

    /**
     * @var integer $type
     *
     * @Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var bigint $referenceid
     *
     * @Column(name="referenceid", type="bigint", nullable=true)
     */
    private $referenceid;


}