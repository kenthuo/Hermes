<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ApiUseCount
 *
 * @Table(name="api_use_count")
 * @Entity
 */
class ApiUseCount
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="api_use_count_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $organizationId
     *
     * @Column(name="organization_id", type="bigint", nullable=false)
     */
    private $organizationId;

    /**
     * @var string $date
     *
     * @Column(name="date", type="string", nullable=true)
     */
    private $date;

    /**
     * @var bigint $hour
     *
     * @Column(name="hour", type="bigint", nullable=true)
     */
    private $hour;

    /**
     * @var bigint $count
     *
     * @Column(name="count", type="bigint", nullable=true)
     */
    private $count;


}