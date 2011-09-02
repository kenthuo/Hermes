<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Blackberry
 *
 * @Table(name="blackberry")
 * @Entity
 */
class Blackberry
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="blackberry_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $phoneNumber
     *
     * @Column(name="phone_number", type="string", length=20, nullable=true)
     */
    private $phoneNumber;

    /**
     * @var integer $haGpsDestId
     *
     * @Column(name="ha_gps_dest_id", type="integer", nullable=true)
     */
    private $haGpsDestId;

    /**
     * @var smallint $isUserplane
     *
     * @Column(name="is_userplane", type="smallint", nullable=true)
     */
    private $isUserplane;

    /**
     * @var smallint $isControlplane
     *
     * @Column(name="is_controlplane", type="smallint", nullable=true)
     */
    private $isControlplane;

    /**
     * @var string $msid
     *
     * @Column(name="msid", type="string", length=25, nullable=true)
     */
    private $msid;

    /**
     * @var string $pin
     *
     * @Column(name="pin", type="string", length=100, nullable=true)
     */
    private $pin;

    /**
     * @var Contigo\DomainBundle\Entity\Beacon
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Beacon")
     * @JoinColumns({
     *   @JoinColumn(name="beacon_id", referencedColumnName="id")
     * })
     */
    private $beacon;


}