<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DrvPndDispatcherPndJobIdx
 *
 * @Table(name="drv_pnd_dispatcher_pnd_job_idx")
 * @Entity
 */
class DrvPndDispatcherPndJobIdx
{
    /**
     * @var bigint $drvPndDispatcherJobId
     *
     * @Column(name="drv_pnd_dispatcher_job_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="drv_pnd_dispatcher_pnd_job_idx_drv_pnd_dispatcher_job_id_seq", allocationSize="1", initialValue="1")
     */
    private $drvPndDispatcherJobId;

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