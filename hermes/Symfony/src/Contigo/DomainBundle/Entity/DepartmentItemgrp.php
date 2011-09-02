<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DepartmentItemgrp
 *
 * @Table(name="department_itemgrp")
 * @Entity
 */
class DepartmentItemgrp
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="department_itemgrp_id_seq", allocationSize="1", initialValue="1")
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

    /**
     * @var bigint $retireTs
     *
     * @Column(name="retire_ts", type="bigint", nullable=false)
     */
    private $retireTs;

    /**
     * @var Contigo\DomainBundle\Entity\ItemGrouping
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\ItemGrouping")
     * @JoinColumns({
     *   @JoinColumn(name="item_grouping_id", referencedColumnName="id")
     * })
     */
    private $itemGrouping;

    /**
     * @var Contigo\DomainBundle\Entity\Department
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Department")
     * @JoinColumns({
     *   @JoinColumn(name="department_id", referencedColumnName="id")
     * })
     */
    private $department;


}