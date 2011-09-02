<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DrvPndCannedRespIdx
 *
 * @Table(name="drv_pnd_canned_resp_idx")
 * @Entity
 */
class DrvPndCannedRespIdx
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="drv_pnd_canned_resp_idx_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $guardianId
     *
     * @Column(name="guardian_id", type="bigint", nullable=false)
     */
    private $guardianId;

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