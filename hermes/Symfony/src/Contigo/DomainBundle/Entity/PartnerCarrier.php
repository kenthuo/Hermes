<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\PartnerCarrier
 *
 * @Table(name="partner_carrier")
 * @Entity
 */
class PartnerCarrier
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="partner_carrier_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $partnerId
     *
     * @Column(name="partner_id", type="bigint", nullable=false)
     */
    private $partnerId;

    /**
     * @var bigint $carrierId
     *
     * @Column(name="carrier_id", type="bigint", nullable=false)
     */
    private $carrierId;

    /**
     * @var smallint $priority
     *
     * @Column(name="priority", type="smallint", nullable=false)
     */
    private $priority;


}