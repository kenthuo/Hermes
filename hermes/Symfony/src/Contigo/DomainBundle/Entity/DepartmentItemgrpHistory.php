<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DepartmentItemgrpHistory
 *
 * @Table(name="department_itemgrp_history")
 * @Entity
 */
class DepartmentItemgrpHistory
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
     * @var bigint $itemGroupingId
     *
     * @Column(name="item_grouping_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $itemGroupingId;

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
     * @var boolean $isSharable
     *
     * @Column(name="is_sharable", type="boolean", nullable=false)
     */
    private $isSharable;

    /**
     * @var bigint $introTs
     *
     * @Column(name="intro_ts", type="bigint", nullable=false)
     */
    private $introTs;


}