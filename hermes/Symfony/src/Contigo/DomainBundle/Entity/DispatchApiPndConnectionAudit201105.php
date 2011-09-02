<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DispatchApiPndConnectionAudit201105
 *
 * @Table(name="dispatch_api_pnd_connection_audit_201105")
 * @Entity
 */
class DispatchApiPndConnectionAudit201105
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="dispatch_api_pnd_connection_audit_201105_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

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
     * @var bigint $departmentId
     *
     * @Column(name="department_id", type="bigint", nullable=false)
     */
    private $departmentId;

    /**
     * @var string $beaconEsn
     *
     * @Column(name="beacon_esn", type="string", length=50, nullable=false)
     */
    private $beaconEsn;

    /**
     * @var string $pndEsn
     *
     * @Column(name="pnd_esn", type="string", length=50, nullable=false)
     */
    private $pndEsn;

    /**
     * @var string $connectionStatus
     *
     * @Column(name="connection_status", type="string", length=50, nullable=true)
     */
    private $connectionStatus;

    /**
     * @var bigint $networkTs
     *
     * @Column(name="network_ts", type="bigint", nullable=true)
     */
    private $networkTs;


}