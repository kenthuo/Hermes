<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\OrganizationDefaultDepartment
 *
 * @Table(name="organization_default_department")
 * @Entity
 */
class OrganizationDefaultDepartment
{
    /**
     * @var bigint $organizationId
     *
     * @Column(name="organization_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="organization_default_department_organization_id_seq", allocationSize="1", initialValue="1")
     */
    private $organizationId;


}