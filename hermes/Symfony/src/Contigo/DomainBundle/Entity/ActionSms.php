<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ActionSms
 *
 * @Table(name="action_sms")
 * @Entity
 */
class ActionSms
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="action_sms_id_seq", allocationSize="1", initialValue="1")
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
     * @var string $mobileNumber
     *
     * @Column(name="mobile_number", type="string", length=15, nullable=true)
     */
    private $mobileNumber;

    /**
     * @var string $text
     *
     * @Column(name="text", type="string", length=255, nullable=true)
     */
    private $text;

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
     * @var Contigo\DomainBundle\Entity\Phone
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Phone")
     * @JoinColumns({
     *   @JoinColumn(name="phone_id", referencedColumnName="id")
     * })
     */
    private $phone;


}