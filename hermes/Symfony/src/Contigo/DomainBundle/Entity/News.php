<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\News
 *
 * @Table(name="news")
 * @Entity
 */
class News
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="news_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $headline
     *
     * @Column(name="headline", type="string", length=100, nullable=true)
     */
    private $headline;

    /**
     * @var text $content
     *
     * @Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var string $url
     *
     * @Column(name="url", type="string", length=100, nullable=true)
     */
    private $url;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;

    /**
     * @var integer $priority
     *
     * @Column(name="priority", type="integer", nullable=true)
     */
    private $priority;

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