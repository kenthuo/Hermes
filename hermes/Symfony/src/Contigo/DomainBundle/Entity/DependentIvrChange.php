<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DependentIvrChange
 *
 * @Table(name="dependent_ivr_change")
 * @Entity
 */
class DependentIvrChange
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="dependent_ivr_change_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $dependentId
     *
     * @Column(name="dependent_id", type="bigint", nullable=false)
     */
    private $dependentId;

    /**
     * @var string $changeType
     *
     * @Column(name="change_type", type="string", length=50, nullable=false)
     */
    private $changeType;

    /**
     * @var bigint $changeTs
     *
     * @Column(name="change_ts", type="bigint", nullable=false)
     */
    private $changeTs;


}