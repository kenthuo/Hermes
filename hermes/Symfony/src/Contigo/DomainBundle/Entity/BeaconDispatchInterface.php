<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\BeaconDispatchInterface
 *
 * @Table(name="beacon_dispatch_interface")
 * @Entity
 */
class BeaconDispatchInterface
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="beacon_dispatch_interface_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     */
    private $beaconId;

    /**
     * @var string $type
     *
     * @Column(name="type", type="string", length=50, nullable=false)
     */
    private $type;

    /**
     * @var bigint $activatedTs
     *
     * @Column(name="activated_ts", type="bigint", nullable=false)
     */
    private $activatedTs;

    /**
     * @var bigint $activatedBy
     *
     * @Column(name="activated_by", type="bigint", nullable=false)
     */
    private $activatedBy;

    /**
     * @var bigint $deactivatedTs
     *
     * @Column(name="deactivated_ts", type="bigint", nullable=false)
     */
    private $deactivatedTs;

    /**
     * @var bigint $deactivatedBy
     *
     * @Column(name="deactivated_by", type="bigint", nullable=false)
     */
    private $deactivatedBy;


}