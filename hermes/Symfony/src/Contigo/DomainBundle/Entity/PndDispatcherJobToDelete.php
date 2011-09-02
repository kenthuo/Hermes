<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\PndDispatcherJobToDelete
 *
 * @Table(name="pnd_dispatcher_job_to_delete")
 * @Entity
 */
class PndDispatcherJobToDelete
{
    /**
     * @var bigint $pndDispatcherJobId
     *
     * @Column(name="pnd_dispatcher_job_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="pnd_dispatcher_job_to_delete_pnd_dispatcher_job_id_seq", allocationSize="1", initialValue="1")
     */
    private $pndDispatcherJobId;

    /**
     * @var string $pndEsn
     *
     * @Column(name="pnd_esn", type="string", length=50, nullable=false)
     */
    private $pndEsn;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=false)
     */
    private $timestamp;


}