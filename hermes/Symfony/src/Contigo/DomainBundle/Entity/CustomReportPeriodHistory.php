<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\CustomReportPeriodHistory
 *
 * @Table(name="custom_report_period_history")
 * @Entity
 */
class CustomReportPeriodHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="custom_report_period_history_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $organizationId
     *
     * @Column(name="organization_id", type="bigint", nullable=false)
     */
    private $organizationId;

    /**
     * @var bigint $departmentId
     *
     * @Column(name="department_id", type="bigint", nullable=false)
     */
    private $departmentId;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=200, nullable=false)
     */
    private $name;

    /**
     * @var text $description
     *
     * @Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var text $cronStr
     *
     * @Column(name="cron_str", type="text", nullable=false)
     */
    private $cronStr;

    /**
     * @var boolean $exclusionRule
     *
     * @Column(name="exclusion_rule", type="boolean", nullable=false)
     */
    private $exclusionRule;

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
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;

    /**
     * @var bigint $accessListId
     *
     * @Column(name="access_list_id", type="bigint", nullable=true)
     */
    private $accessListId;

    /**
     * @var string $type
     *
     * @Column(name="type", type="string", length=200, nullable=false)
     */
    private $type;


}