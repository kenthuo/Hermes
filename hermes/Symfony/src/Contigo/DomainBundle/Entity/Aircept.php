<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Aircept
 *
 * @Table(name="aircept")
 * @Entity
 */
class Aircept
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="aircept_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     */
    private $beaconId;

    /**
     * @var smallint $currentState
     *
     * @Column(name="current_state", type="smallint", nullable=true)
     */
    private $currentState;

    /**
     * @var smallint $previousState
     *
     * @Column(name="previous_state", type="smallint", nullable=true)
     */
    private $previousState;

    /**
     * @var bigint $lastTrackingStopped
     *
     * @Column(name="last_tracking_stopped", type="bigint", nullable=true)
     */
    private $lastTrackingStopped;

    /**
     * @var string $aerisState
     *
     * @Column(name="aeris_state", type="string", length=20, nullable=true)
     */
    private $aerisState;

    /**
     * @var integer $aerisServiceLevel
     *
     * @Column(name="aeris_service_level", type="integer", nullable=true)
     */
    private $aerisServiceLevel;

    /**
     * @var boolean $aerisOptionApproved
     *
     * @Column(name="aeris_option_approved", type="boolean", nullable=true)
     */
    private $aerisOptionApproved;

    /**
     * @var boolean $aerisMinProvisioned
     *
     * @Column(name="aeris_min_provisioned", type="boolean", nullable=true)
     */
    private $aerisMinProvisioned;


}