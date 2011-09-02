<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DrvOrgPndDrvStatus
 *
 * @Table(name="drv_org_pnd_drv_status")
 * @Entity
 */
class DrvOrgPndDrvStatus
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="drv_org_pnd_drv_status_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $organizationId
     *
     * @Column(name="organization_id", type="bigint", nullable=false)
     */
    private $organizationId;

    /**
     * @var string $drvStatusType
     *
     * @Column(name="drv_status_type", type="string", length=20, nullable=false)
     */
    private $drvStatusType;

    /**
     * @var smallint $drvStatusId
     *
     * @Column(name="drv_status_id", type="smallint", nullable=false)
     */
    private $drvStatusId;

    /**
     * @var string $drvStatus
     *
     * @Column(name="drv_status", type="string", length=49, nullable=false)
     */
    private $drvStatus;

    /**
     * @var bigint $createdTs
     *
     * @Column(name="created_ts", type="bigint", nullable=false)
     */
    private $createdTs;

    /**
     * @var bigint $retiredTs
     *
     * @Column(name="retired_ts", type="bigint", nullable=false)
     */
    private $retiredTs;


}