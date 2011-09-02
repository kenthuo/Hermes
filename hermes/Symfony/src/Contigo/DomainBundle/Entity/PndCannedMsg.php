<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\PndCannedMsg
 *
 * @Table(name="pnd_canned_msg")
 * @Entity
 */
class PndCannedMsg
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="pnd_canned_msg_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $organizationId
     *
     * @Column(name="organization_id", type="bigint", nullable=false)
     */
    private $organizationId;

    /**
     * @var bigint $departmentId
     *
     * @Column(name="department_id", type="bigint", nullable=false)
     */
    private $departmentId;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     */
    private $beaconId;

    /**
     * @var bigint $assetId
     *
     * @Column(name="asset_id", type="bigint", nullable=false)
     */
    private $assetId;

    /**
     * @var smallint $cannedMsgIdInPnd
     *
     * @Column(name="canned_msg_id_in_pnd", type="smallint", nullable=false)
     */
    private $cannedMsgIdInPnd;

    /**
     * @var text $cannedMsg
     *
     * @Column(name="canned_msg", type="text", nullable=false)
     */
    private $cannedMsg;


}