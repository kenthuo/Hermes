<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\PndDispatcherPndJobIdx
 *
 * @Table(name="pnd_dispatcher_pnd_job_idx")
 * @Entity
 */
class PndDispatcherPndJobIdx
{
    /**
     * @var bigint $pndDispatcherJobId
     *
     * @Column(name="pnd_dispatcher_job_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="pnd_dispatcher_pnd_job_idx_pnd_dispatcher_job_id_seq", allocationSize="1", initialValue="1")
     */
    private $pndDispatcherJobId;

    /**
     * @var integer $pndJobIdx
     *
     * @Column(name="pnd_job_idx", type="integer", nullable=true)
     */
    private $pndJobIdx;

    /**
     * @var bigint $lastUpdateTs
     *
     * @Column(name="last_update_ts", type="bigint", nullable=true)
     */
    private $lastUpdateTs;


}