<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\CustomerReceiver
 *
 * @Table(name="customer_receiver")
 * @Entity
 */
class CustomerReceiver
{
    /**
     * @var bigint $customerId
     *
     * @Column(name="customer_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="customer_receiver_customer_id_seq", allocationSize="1", initialValue="1")
     */
    private $customerId;

    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     */
    private $id;

    /**
     * @var string $ip
     *
     * @Column(name="ip", type="string", length=32, nullable=false)
     */
    private $ip;

    /**
     * @var bigint $port
     *
     * @Column(name="port", type="bigint", nullable=false)
     */
    private $port;

    /**
     * @var Contigo\DomainBundle\Entity\Receiver
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Receiver")
     * @JoinColumns({
     *   @JoinColumn(name="receiver_id", referencedColumnName="id")
     * })
     */
    private $receiver;

    /**
     * @var Contigo\DomainBundle\Entity\Customer
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Customer")
     * @JoinColumns({
     *   @JoinColumn(name="customer_id", referencedColumnName="id")
     * })
     */
    private $customer;


}