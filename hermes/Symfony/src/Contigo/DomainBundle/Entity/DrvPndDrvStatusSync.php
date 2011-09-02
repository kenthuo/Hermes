<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DrvPndDrvStatusSync
 *
 * @Table(name="drv_pnd_drv_status_sync")
 * @Entity
 */
class DrvPndDrvStatusSync
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="drv_pnd_drv_status_sync_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $organizationId
     *
     * @Column(name="organization_id", type="bigint", nullable=false)
     */
    private $organizationId;

    /**
     * @var string $pndEsn
     *
     * @Column(name="pnd_esn", type="string", length=50, nullable=false)
     */
    private $pndEsn;

    /**
     * @var bigint $lastSyncTs
     *
     * @Column(name="last_sync_ts", type="bigint", nullable=false)
     */
    private $lastSyncTs;


}