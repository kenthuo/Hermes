<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DependentAudit
 *
 * @Table(name="dependent_audit")
 * @Entity
 */
class DependentAudit
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="dependent_audit_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $subscriberId
     *
     * @Column(name="subscriber_id", type="bigint", nullable=true)
     */
    private $subscriberId;

    /**
     * @var bigint $organizationId
     *
     * @Column(name="organization_id", type="bigint", nullable=true)
     */
    private $organizationId;

    /**
     * @var bigint $createDate
     *
     * @Column(name="create_date", type="bigint", nullable=true)
     */
    private $createDate;

    /**
     * @var bigint $deleteDate
     *
     * @Column(name="delete_date", type="bigint", nullable=true)
     */
    private $deleteDate;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;


}