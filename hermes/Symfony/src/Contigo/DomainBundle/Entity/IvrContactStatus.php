<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\IvrContactStatus
 *
 * @Table(name="ivr_contact_status")
 * @Entity
 */
class IvrContactStatus
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="ivr_contact_status_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $dependentId
     *
     * @Column(name="dependent_id", type="bigint", nullable=true)
     */
    private $dependentId;

    /**
     * @var text $sessionId
     *
     * @Column(name="session_id", type="text", nullable=true)
     */
    private $sessionId;

    /**
     * @var string $state
     *
     * @Column(name="state", type="string", length=20, nullable=true)
     */
    private $state;

    /**
     * @var bigint $ivrTimestamp
     *
     * @Column(name="ivr_timestamp", type="bigint", nullable=false)
     */
    private $ivrTimestamp;

    /**
     * @var boolean $isInbound
     *
     * @Column(name="is_inbound", type="boolean", nullable=true)
     */
    private $isInbound;


}