<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\BeaconRegistration
 *
 * @Table(name="beacon_registration")
 * @Entity
 */
class BeaconRegistration
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="beacon_registration_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=true)
     */
    private $beaconId;

    /**
     * @var bigint $subscriberId
     *
     * @Column(name="subscriber_id", type="bigint", nullable=true)
     */
    private $subscriberId;

    /**
     * @var bigint $organizationId
     *
     * @Column(name="organization_id", type="bigint", nullable=true)
     */
    private $organizationId;

    /**
     * @var bigint $regDate
     *
     * @Column(name="reg_date", type="bigint", nullable=true)
     */
    private $regDate;

    /**
     * @var bigint $unregDate
     *
     * @Column(name="unreg_date", type="bigint", nullable=true)
     */
    private $unregDate;

    /**
     * @var bigint $billingDate
     *
     * @Column(name="billing_date", type="bigint", nullable=true)
     */
    private $billingDate;


}