<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\GenericHandset
 *
 * @Table(name="generic_handset")
 * @Entity
 */
class GenericHandset
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="generic_handset_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $phoneNumber
     *
     * @Column(name="phone_number", type="string", length=20, nullable=true)
     */
    private $phoneNumber;

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
     * @var integer $haGpsDestId
     *
     * @Column(name="ha_gps_dest_id", type="integer", nullable=true)
     */
    private $haGpsDestId;

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