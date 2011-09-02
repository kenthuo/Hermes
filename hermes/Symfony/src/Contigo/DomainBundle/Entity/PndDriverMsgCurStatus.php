<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\PndDriverMsgCurStatus
 *
 * @Table(name="pnd_driver_msg_cur_status")
 * @Entity
 */
class PndDriverMsgCurStatus
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="pnd_driver_msg_cur_status_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

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
     * @var string $status
     *
     * @Column(name="status", type="string", length=50, nullable=false)
     */
    private $status;

    /**
     * @var bigint $pndDispatcherMsgId
     *
     * @Column(name="pnd_dispatcher_msg_id", type="bigint", nullable=true)
     */
    private $pndDispatcherMsgId;

    /**
     * @var bigint $receivedTs
     *
     * @Column(name="received_ts", type="bigint", nullable=true)
     */
    private $receivedTs;

    /**
     * @var string $responseType
     *
     * @Column(name="response_type", type="string", length=50, nullable=true)
     */
    private $responseType;


}