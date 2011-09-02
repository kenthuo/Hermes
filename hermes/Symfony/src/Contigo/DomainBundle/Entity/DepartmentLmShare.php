<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DepartmentLmShare
 *
 * @Table(name="department_lm_share")
 * @Entity
 */
class DepartmentLmShare
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="department_lm_share_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $introTs
     *
     * @Column(name="intro_ts", type="bigint", nullable=false)
     */
    private $introTs;

    /**
     * @var bigint $retireTs
     *
     * @Column(name="retire_ts", type="bigint", nullable=false)
     */
    private $retireTs;

    /**
     * @var Contigo\DomainBundle\Entity\Department
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Department")
     * @JoinColumns({
     *   @JoinColumn(name="to_department_id", referencedColumnName="id")
     * })
     */
    private $toDepartment;

    /**
     * @var Contigo\DomainBundle\Entity\DepartmentLm
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\DepartmentLm")
     * @JoinColumns({
     *   @JoinColumn(name="department_lm_id", referencedColumnName="id")
     * })
     */
    private $departmentLm;


}