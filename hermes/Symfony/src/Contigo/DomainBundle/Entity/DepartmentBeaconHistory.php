<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DepartmentBeaconHistory
 *
 * @Table(name="department_beacon_history")
 * @Entity
 */
class DepartmentBeaconHistory
{
    /**
     * @var bigint $departmentId
     *
     * @Column(name="department_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $departmentId;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $beaconId;

    /**
     * @var bigint $retireTs
     *
     * @Column(name="retire_ts", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $retireTs;

    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     */
    private $id;

    /**
     * @var bigint $introTs
     *
     * @Column(name="intro_ts", type="bigint", nullable=false)
     */
    private $introTs;


}