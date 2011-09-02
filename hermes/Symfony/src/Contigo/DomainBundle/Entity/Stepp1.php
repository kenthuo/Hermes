<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Stepp1
 *
 * @Table(name="stepp1")
 * @Entity
 */
class Stepp1
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="stepp1_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $shortcode
     *
     * @Column(name="shortcode", type="string", length=30, nullable=true)
     */
    private $shortcode;

    /**
     * @var bigint $lastTrackingStopped
     *
     * @Column(name="last_tracking_stopped", type="bigint", nullable=true)
     */
    private $lastTrackingStopped;

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