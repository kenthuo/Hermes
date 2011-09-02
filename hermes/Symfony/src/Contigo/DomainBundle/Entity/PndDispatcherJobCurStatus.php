<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\PndDispatcherJobCurStatus
 *
 * @Table(name="pnd_dispatcher_job_cur_status")
 * @Entity
 */
class PndDispatcherJobCurStatus
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="pnd_dispatcher_job_cur_status_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $departmentId
     *
     * @Column(name="department_id", type="bigint", nullable=false)
     */
    private $departmentId;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     */
    private $beaconId;

    /**
     * @var bigint $assetId
     *
     * @Column(name="asset_id", type="bigint", nullable=false)
     */
    private $assetId;

    /**
     * @var string $status
     *
     * @Column(name="status", type="string", length=50, nullable=false)
     */
    private $status;

    /**
     * @var bigint $statusTs
     *
     * @Column(name="status_ts", type="bigint", nullable=true)
     */
    private $statusTs;

    /**
     * @var bigint $sentTs
     *
     * @Column(name="sent_ts", type="bigint", nullable=true)
     */
    private $sentTs;

    /**
     * @var bigint $pndDispatcherJobId
     *
     * @Column(name="pnd_dispatcher_job_id", type="bigint", nullable=false)
     */
    private $pndDispatcherJobId;


}