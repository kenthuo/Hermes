<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\TOrder
 *
 * @Table(name="t_order")
 * @Entity
 */
class TOrder
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="t_order_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $customer
     *
     * @Column(name="customer", type="string", length=255, nullable=true)
     */
    private $customer;


}