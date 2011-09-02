<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\BeaconAudit
 *
 * @Table(name="beacon_audit")
 * @Entity
 */
class BeaconAudit
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="beacon_audit_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var bigint $oldRegSubId
     *
     * @Column(name="old_reg_sub_id", type="bigint", nullable=true)
     */
    private $oldRegSubId;

    /**
     * @var bigint $oldRegOrgId
     *
     * @Column(name="old_reg_org_id", type="bigint", nullable=true)
     */
    private $oldRegOrgId;

    /**
     * @var bigint $oldAssetId
     *
     * @Column(name="old_asset_id", type="bigint", nullable=true)
     */
    private $oldAssetId;

    /**
     * @var bigint $oldDepId
     *
     * @Column(name="old_dep_id", type="bigint", nullable=true)
     */
    private $oldDepId;

    /**
     * @var bigint $regDate
     *
     * @Column(name="reg_date", type="bigint", nullable=true)
     */
    private $regDate;

    /**
     * @var bigint $unregDate
     *
     * @Column(name="unreg_date", type="bigint", nullable=true)
     */
    private $unregDate;

    /**
     * @var string $oldName
     *
     * @Column(name="old_name", type="string", length=100, nullable=true)
     */
    private $oldName;


}