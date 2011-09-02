<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\AccountNote
 *
 * @ORM\Table(name="account_note")
 * @ORM\Entity
 */
class AccountNote
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="account_note_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var text $note
     *
     * @Column(name="note", type="text", nullable=true)
     */
    private $note;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;

    /**
     * @var Contigo\DomainBundle\Entity\Subscriber
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Subscriber")
     * @JoinColumns({
     *   @JoinColumn(name="subscriber_id", referencedColumnName="id")
     * })
     */
    private $subscriber;

    /**
     * @var Contigo\DomainBundle\Entity\Organization
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Organization")
     * @JoinColumns({
     *   @JoinColumn(name="organization_id", referencedColumnName="id")
     * })
     */
    private $organization;


}