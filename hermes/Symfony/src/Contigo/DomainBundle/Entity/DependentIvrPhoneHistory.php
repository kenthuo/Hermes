<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DependentIvrPhoneHistory
 *
 * @Table(name="dependent_ivr_phone_history")
 * @Entity
 */
class DependentIvrPhoneHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="dependent_ivr_phone_history_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $dependentId
     *
     * @Column(name="dependent_id", type="bigint", nullable=false)
     */
    private $dependentId;

    /**
     * @var bigint $phoneId
     *
     * @Column(name="phone_id", type="bigint", nullable=false)
     */
    private $phoneId;

    /**
     * @var smallint $callSequence
     *
     * @Column(name="call_sequence", type="smallint", nullable=false)
     */
    private $callSequence;

    /**
     * @var bigint $createTs
     *
     * @Column(name="create_ts", type="bigint", nullable=false)
     */
    private $createTs;

    /**
     * @var bigint $xid
     *
     * @Column(name="xid", type="bigint", nullable=true)
     */
    private $xid;

    /**
     * @var boolean $isDeleted
     *
     * @Column(name="is_deleted", type="boolean", nullable=true)
     */
    private $isDeleted;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;

    /**
     * @var bigint $accessListId
     *
     * @Column(name="access_list_id", type="bigint", nullable=true)
     */
    private $accessListId;


}