<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DrvPndDriverMsgCurStatus
 *
 * @Table(name="drv_pnd_driver_msg_cur_status")
 * @Entity
 */
class DrvPndDriverMsgCurStatus
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="drv_pnd_driver_msg_cur_status_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $guardianId
     *
     * @Column(name="guardian_id", type="bigint", nullable=false)
     */
    private $guardianId;

    /**
     * @var bigint $drvPndDispatcherMsgId
     *
     * @Column(name="drv_pnd_dispatcher_msg_id", type="bigint", nullable=true)
     */
    private $drvPndDispatcherMsgId;

    /**
     * @var string $responseType
     *
     * @Column(name="response_type", type="string", length=50, nullable=true)
     */
    private $responseType;

    /**
     * @var string $status
     *
     * @Column(name="status", type="string", length=50, nullable=false)
     */
    private $status;

    /**
     * @var bigint $receivedTs
     *
     * @Column(name="received_ts", type="bigint", nullable=true)
     */
    private $receivedTs;


}