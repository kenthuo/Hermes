<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\PndCannedResponseIdx
 *
 * @Table(name="pnd_canned_response_idx")
 * @Entity
 */
class PndCannedResponseIdx
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="pnd_canned_response_idx_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     */
    private $beaconId;

    /**
     * @var integer $cannedResponseId
     *
     * @Column(name="canned_response_id", type="integer", nullable=false)
     */
    private $cannedResponseId;

    /**
     * @var bigint $lastUpdatedTs
     *
     * @Column(name="last_updated_ts", type="bigint", nullable=false)
     */
    private $lastUpdatedTs;

    /**
     * @var boolean $isAvailable
     *
     * @Column(name="is_available", type="boolean", nullable=false)
     */
    private $isAvailable;


}