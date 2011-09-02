<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\BeaconStateAction
 *
 * @Table(name="beacon_state_action")
 * @Entity
 */
class BeaconStateAction
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="beacon_state_action_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconStateId
     *
     * @Column(name="beacon_state_id", type="bigint", nullable=false)
     */
    private $beaconStateId;

    /**
     * @var bigint $allowedBsId
     *
     * @Column(name="allowed_bs_id", type="bigint", nullable=false)
     */
    private $allowedBsId;


}