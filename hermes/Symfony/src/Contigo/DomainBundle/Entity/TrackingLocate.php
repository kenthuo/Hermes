<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\TrackingLocate
 *
 * @Table(name="tracking_locate")
 * @Entity
 */
class TrackingLocate
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="tracking_locate_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $trackingId
     *
     * @Column(name="tracking_id", type="bigint", nullable=false)
     */
    private $trackingId;

    /**
     * @var bigint $locateId
     *
     * @Column(name="locate_id", type="bigint", nullable=false)
     */
    private $locateId;


}