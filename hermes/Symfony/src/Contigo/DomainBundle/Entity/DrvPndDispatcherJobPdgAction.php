<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DrvPndDispatcherJobPdgAction
 *
 * @Table(name="drv_pnd_dispatcher_job_pdg_action")
 * @Entity
 */
class DrvPndDispatcherJobPdgAction
{
    /**
     * @var bigint $drvPndDispatcherJobId
     *
     * @Column(name="drv_pnd_dispatcher_job_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="drv_pnd_dispatcher_job_pdg_action_drv_pnd_dispatcher_job_id_seq", allocationSize="1", initialValue="1")
     */
    private $drvPndDispatcherJobId;

    /**
     * @var bigint $guardianId
     *
     * @Column(name="guardian_id", type="bigint", nullable=false)
     */
    private $guardianId;

    /**
     * @var string $action
     *
     * @Column(name="action", type="string", length=50, nullable=false)
     */
    private $action;

    /**
     * @var bigint $lastUpdatedTs
     *
     * @Column(name="last_updated_ts", type="bigint", nullable=false)
     */
    private $lastUpdatedTs;


}