<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ControlPlaneReq
 *
 * @Table(name="control_plane_req")
 * @Entity
 */
class ControlPlaneReq
{
    /**
     * @var bigint $haGpsDestId
     *
     * @Column(name="ha_gps_dest_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $haGpsDestId;

    /**
     * @var bigint $requestProfileId
     *
     * @Column(name="request_profile_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $requestProfileId;

    /**
     * @var bigint $requestTypeId
     *
     * @Column(name="request_type_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $requestTypeId;

    /**
     * @var integera $acceptAccReqSeries
     *
     * @Column(name="accept_acc_req_series", type="integera", nullable=false)
     */
    private $acceptAccReqSeries;

    /**
     * @var bigint $minAccReq
     *
     * @Column(name="min_acc_req", type="bigint", nullable=false)
     */
    private $minAccReq;

    /**
     * @var bigint $requestDelay
     *
     * @Column(name="request_delay", type="bigint", nullable=false)
     */
    private $requestDelay;

    /**
     * @var Contigo\DomainBundle\Entity\RequestType
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\RequestType")
     * @JoinColumns({
     *   @JoinColumn(name="request_type_id", referencedColumnName="id")
     * })
     */
    private $requestType;

    /**
     * @var Contigo\DomainBundle\Entity\RequestProfile
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\RequestProfile")
     * @JoinColumns({
     *   @JoinColumn(name="request_profile_id", referencedColumnName="id")
     * })
     */
    private $requestProfile;

    /**
     * @var Contigo\DomainBundle\Entity\HaGpsDest
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\HaGpsDest")
     * @JoinColumns({
     *   @JoinColumn(name="ha_gps_dest_id", referencedColumnName="id")
     * })
     */
    private $haGpsDest;


}