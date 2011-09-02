<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\BeaconmodelSolnHistory
 *
 * @Table(name="beaconmodel_soln_history")
 * @Entity
 */
class BeaconmodelSolnHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="beaconmodel_soln_history_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconmodelId
     *
     * @Column(name="beaconmodel_id", type="bigint", nullable=false)
     */
    private $beaconmodelId;

    /**
     * @var bigint $solutionId
     *
     * @Column(name="solution_id", type="bigint", nullable=false)
     */
    private $solutionId;

    /**
     * @var bigint $introTs
     *
     * @Column(name="intro_ts", type="bigint", nullable=false)
     */
    private $introTs;

    /**
     * @var bigint $xid
     *
     * @Column(name="xid", type="bigint", nullable=false)
     */
    private $xid;

    /**
     * @var boolean $isDeleted
     *
     * @Column(name="is_deleted", type="boolean", nullable=true)
     */
    private $isDeleted;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=false)
     */
    private $timestamp;

    /**
     * @var bigint $accessListId
     *
     * @Column(name="access_list_id", type="bigint", nullable=true)
     */
    private $accessListId;


}