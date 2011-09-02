<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DrvPndDispatcherMsgCannedResp
 *
 * @Table(name="drv_pnd_dispatcher_msg_canned_resp")
 * @Entity
 */
class DrvPndDispatcherMsgCannedResp
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="drv_pnd_dispatcher_msg_canned_resp_id_seq", allocationSize="1", initialValue="1")
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
     * @Column(name="drv_pnd_dispatcher_msg_id", type="bigint", nullable=false)
     */
    private $drvPndDispatcherMsgId;

    /**
     * @var integer $cannedResponseId
     *
     * @Column(name="canned_response_id", type="integer", nullable=false)
     */
    private $cannedResponseId;

    /**
     * @var string $cannedResponseText
     *
     * @Column(name="canned_response_text", type="string", length=200, nullable=false)
     */
    private $cannedResponseText;


}