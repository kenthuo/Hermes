<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\CustomReportPeriod
 *
 * @Table(name="custom_report_period")
 * @Entity
 */
class CustomReportPeriod
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="custom_report_period_id_seq", allocationSize="1", initialValue="1")
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
     * @var string $type
     *
     * @Column(name="type", type="string", length=200, nullable=false)
     */
    private $type;


}