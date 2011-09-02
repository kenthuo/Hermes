<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\SystemMessage
 *
 * @Table(name="system_message")
 * @Entity
 */
class SystemMessage
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="system_message_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var text $notice
     *
     * @Column(name="notice", type="text", nullable=true)
     */
    private $notice;

    /**
     * @var text $status
     *
     * @Column(name="status", type="text", nullable=true)
     */
    private $status;

    /**
     * @var text $maintenance
     *
     * @Column(name="maintenance", type="text", nullable=true)
     */
    private $maintenance;

    /**
     * @var text $name
     *
     * @Column(name="name", type="text", nullable=true)
     */
    private $name;

    /**
     * @var bigint $createTs
     *
     * @Column(name="create_ts", type="bigint", nullable=true)
     */
    private $createTs;

    /**
     * @var boolean $isActive
     *
     * @Column(name="is_active", type="boolean", nullable=true)
     */
    private $isActive;


}