<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\PndDispatcherGroupMsg
 *
 * @Table(name="pnd_dispatcher_group_msg")
 * @Entity
 */
class PndDispatcherGroupMsg
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="pnd_dispatcher_group_msg_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var text $message
     *
     * @Column(name="message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var string $responseType
     *
     * @Column(name="response_type", type="string", length=50, nullable=false)
     */
    private $responseType;

    /**
     * @var bigint $sentTs
     *
     * @Column(name="sent_ts", type="bigint", nullable=false)
     */
    private $sentTs;

    /**
     * @var bigint $sentBy
     *
     * @Column(name="sent_by", type="bigint", nullable=false)
     */
    private $sentBy;

    /**
     * @var string $status
     *
     * @Column(name="status", type="string", length=50, nullable=true)
     */
    private $status;

    /**
     * @var bigint $statusTs
     *
     * @Column(name="status_ts", type="bigint", nullable=true)
     */
    private $statusTs;


}