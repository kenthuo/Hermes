<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ReceiverEventXslt
 *
 * @Table(name="receiver_event_xslt")
 * @Entity
 */
class ReceiverEventXslt
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="receiver_event_xslt_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var text $xslt
     *
     * @Column(name="xslt", type="text", nullable=false)
     */
    private $xslt;

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
     * @var Contigo\DomainBundle\Entity\EventIndex
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\EventIndex")
     * @JoinColumns({
     *   @JoinColumn(name="event_index_id", referencedColumnName="id")
     * })
     */
    private $eventIndex;


}