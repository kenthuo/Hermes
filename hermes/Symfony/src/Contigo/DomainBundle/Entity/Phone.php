<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Phone
 *
 * @Table(name="phone")
 * @Entity
 */
class Phone
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="phone_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $organizationId
     *
     * @Column(name="organization_id", type="bigint", nullable=true)
     */
    private $organizationId;

    /**
     * @var bigint $subscriberId
     *
     * @Column(name="subscriber_id", type="bigint", nullable=true)
     */
    private $subscriberId;

    /**
     * @var string $areacode
     *
     * @Column(name="areacode", type="string", length=4, nullable=true)
     */
    private $areacode;

    /**
     * @var string $number
     *
     * @Column(name="number", type="string", length=15, nullable=true)
     */
    private $number;

    /**
     * @var string $extention
     *
     * @Column(name="extention", type="string", length=10, nullable=true)
     */
    private $extention;

    /**
     * @var string $type
     *
     * @Column(name="type", type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @var integer $priority
     *
     * @Column(name="priority", type="integer", nullable=true)
     */
    private $priority;

    /**
     * @var Contigo\DomainBundle\Entity\Guardian
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Guardian")
     * @JoinColumns({
     *   @JoinColumn(name="guardian_id", referencedColumnName="id")
     * })
     */
    private $guardian;

    /**
     * @var Contigo\DomainBundle\Entity\Carrier
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Carrier")
     * @JoinColumns({
     *   @JoinColumn(name="carrier_id", referencedColumnName="id")
     * })
     */
    private $carrier;


}