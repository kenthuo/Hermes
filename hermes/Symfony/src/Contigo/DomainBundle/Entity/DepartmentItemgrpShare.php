<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DepartmentItemgrpShare
 *
 * @Table(name="department_itemgrp_share")
 * @Entity
 */
class DepartmentItemgrpShare
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="department_itemgrp_share_id_seq", allocationSize="1", initialValue="1")
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
     * @var Contigo\DomainBundle\Entity\DepartmentItemgrp
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\DepartmentItemgrp")
     * @JoinColumns({
     *   @JoinColumn(name="department_itemgrp_id", referencedColumnName="id")
     * })
     */
    private $departmentItemgrp;


}