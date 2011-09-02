<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ActionAuxalarm
 *
 * @Table(name="action_auxalarm")
 * @Entity
 */
class ActionAuxalarm
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="action_auxalarm_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $subscriberId
     *
     * @Column(name="subscriber_id", type="bigint", nullable=true)
     */
    private $subscriberId;

    /**
     * @var bigint $organizationId
     *
     * @Column(name="organization_id", type="bigint", nullable=true)
     */
    private $organizationId;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var text $description
     *
     * @Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var boolean $notifyOn
     *
     * @Column(name="notify_on", type="boolean", nullable=true)
     */
    private $notifyOn;

    /**
     * @var boolean $notifyOff
     *
     * @Column(name="notify_off", type="boolean", nullable=true)
     */
    private $notifyOff;

    /**
     * @var boolean $toggle
     *
     * @Column(name="toggle", type="boolean", nullable=true)
     */
    private $toggle;

    /**
     * @var integer $ioPortNum
     *
     * @Column(name="io_port_num", type="integer", nullable=true)
     */
    private $ioPortNum;


}