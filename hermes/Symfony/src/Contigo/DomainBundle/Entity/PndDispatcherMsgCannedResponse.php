<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\PndDispatcherMsgCannedResponse
 *
 * @Table(name="pnd_dispatcher_msg_canned_response")
 * @Entity
 */
class PndDispatcherMsgCannedResponse
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="pnd_dispatcher_msg_canned_response_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     */
    private $beaconId;

    /**
     * @var bigint $pndDispatcherMsgId
     *
     * @Column(name="pnd_dispatcher_msg_id", type="bigint", nullable=false)
     */
    private $pndDispatcherMsgId;

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