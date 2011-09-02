<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ActionIgnitionSense
 *
 * @Table(name="action_ignition_sense")
 * @Entity
 */
class ActionIgnitionSense
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="action_ignition_sense_id_seq", allocationSize="1", initialValue="1")
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


}