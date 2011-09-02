<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\SubscriberModule
 *
 * @Table(name="subscriber_module")
 * @Entity
 */
class SubscriberModule
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="subscriber_module_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var boolean $isVisible
     *
     * @Column(name="is_visible", type="boolean", nullable=false)
     */
    private $isVisible;

    /**
     * @var boolean $isConfigurable
     *
     * @Column(name="is_configurable", type="boolean", nullable=false)
     */
    private $isConfigurable;

    /**
     * @var bigint $introTs
     *
     * @Column(name="intro_ts", type="bigint", nullable=false)
     */
    private $introTs;

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
     * @var Contigo\DomainBundle\Entity\Module
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Module")
     * @JoinColumns({
     *   @JoinColumn(name="module_id", referencedColumnName="id")
     * })
     */
    private $module;


}