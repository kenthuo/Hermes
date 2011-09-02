<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Item
 *
 * @Table(name="item")
 * @Entity
 */
class Item
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="item_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var float $price
     *
     * @Column(name="price", type="float", nullable=false)
     */
    private $price;

    /**
     * @var string $product
     *
     * @Column(name="product", type="string", length=255, nullable=true)
     */
    private $product;

    /**
     * @var integer $quantity
     *
     * @Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var Contigo\DomainBundle\Entity\TOrder
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\TOrder")
     * @JoinColumns({
     *   @JoinColumn(name="order_id", referencedColumnName="id")
     * })
     */
    private $order;


}