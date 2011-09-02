<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DriverCannedMsg
 *
 * @Table(name="driver_canned_msg")
 * @Entity
 */
class DriverCannedMsg
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="driver_canned_msg_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var text $subject
     *
     * @Column(name="subject", type="text", nullable=false)
     */
    private $subject;

    /**
     * @var string $paramName
     *
     * @Column(name="param_name", type="string", length=20, nullable=true)
     */
    private $paramName;

    /**
     * @var string $paramType
     *
     * @Column(name="param_type", type="string", length=20, nullable=true)
     */
    private $paramType;

    /**
     * @var Contigo\DomainBundle\Entity\Organization
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Organization")
     * @JoinColumns({
     *   @JoinColumn(name="organization_id", referencedColumnName="id")
     * })
     */
    private $organization;

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