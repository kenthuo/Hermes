<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\BeaconState
 *
 * @Table(name="beacon_state")
 * @Entity
 */
class BeaconState
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="beacon_state_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var boolean $isConfigured
     *
     * @Column(name="is_configured", type="boolean", nullable=true)
     */
    private $isConfigured;

    /**
     * @var boolean $isTested
     *
     * @Column(name="is_tested", type="boolean", nullable=true)
     */
    private $isTested;

    /**
     * @var boolean $isOperable
     *
     * @Column(name="is_operable", type="boolean", nullable=true)
     */
    private $isOperable;

    /**
     * @var boolean $isBillable
     *
     * @Column(name="is_billable", type="boolean", nullable=true)
     */
    private $isBillable;

    /**
     * @var boolean $isAssigned
     *
     * @Column(name="is_assigned", type="boolean", nullable=true)
     */
    private $isAssigned;

    /**
     * @var boolean $isRegistered
     *
     * @Column(name="is_registered", type="boolean", nullable=true)
     */
    private $isRegistered;

    /**
     * @var boolean $isProvisioned
     *
     * @Column(name="is_provisioned", type="boolean", nullable=true)
     */
    private $isProvisioned;


}