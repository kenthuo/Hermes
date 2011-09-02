<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Guardian
 *
 * @Table(name="guardian")
 * @Entity
 */
class Guardian
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="guardian_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $organizationId
     *
     * @Column(name="organization_id", type="bigint", nullable=true)
     */
    private $organizationId;

    /**
     * @var bigint $subscriberId
     *
     * @Column(name="subscriber_id", type="bigint", nullable=true)
     */
    private $subscriberId;

    /**
     * @var string $keyword
     *
     * @Column(name="keyword", type="string", length=30, nullable=true)
     */
    private $keyword;

    /**
     * @var string $type
     *
     * @Column(name="type", type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string $relationship
     *
     * @Column(name="relationship", type="string", length=255, nullable=true)
     */
    private $relationship;

    /**
     * @var text $notes
     *
     * @Column(name="notes", type="text", nullable=true)
     */
    private $notes;

    /**
     * @var integer $priority
     *
     * @Column(name="priority", type="integer", nullable=true)
     */
    private $priority;

    /**
     * @var bigint $loginId
     *
     * @Column(name="login_id", type="bigint", nullable=true)
     */
    private $loginId;

    /**
     * @var boolean $isAvailable
     *
     * @Column(name="is_available", type="boolean", nullable=true)
     */
    private $isAvailable;

    /**
     * @var boolean $isDispatchedDriver
     *
     * @Column(name="is_dispatched_driver", type="boolean", nullable=true)
     */
    private $isDispatchedDriver;

    /**
     * @var string $terminalCode
     *
     * @Column(name="terminal_code", type="string", length=4, nullable=true)
     */
    private $terminalCode;

    /**
     * @var string $terminalPin
     *
     * @Column(name="terminal_pin", type="string", length=100, nullable=true)
     */
    private $terminalPin;

    /**
     * @var boolean $isDispatchPndDriver
     *
     * @Column(name="is_dispatch_pnd_driver", type="boolean", nullable=true)
     */
    private $isDispatchPndDriver;

    /**
     * @var string $pndDriverId
     *
     * @Column(name="pnd_driver_id", type="string", length=49, nullable=true)
     */
    private $pndDriverId;


}