<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DepartmentScenarioHistory
 *
 * @Table(name="department_scenario_history")
 * @Entity
 */
class DepartmentScenarioHistory
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
     * @var bigint $scenarioId
     *
     * @Column(name="scenario_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $scenarioId;

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
     * @Column(name="id", type="bigint", nullable=true)
     */
    private $id;

    /**
     * @var boolean $isSharable
     *
     * @Column(name="is_sharable", type="boolean", nullable=true)
     */
    private $isSharable;

    /**
     * @var bigint $introTs
     *
     * @Column(name="intro_ts", type="bigint", nullable=true)
     */
    private $introTs;


}