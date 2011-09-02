<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\MdtRegistration
 *
 * @Table(name="mdt_registration")
 * @Entity
 */
class MdtRegistration
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="mdt_registration_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $mdtId
     *
     * @Column(name="mdt_id", type="bigint", nullable=false)
     */
    private $mdtId;

    /**
     * @var bigint $organizationId
     *
     * @Column(name="organization_id", type="bigint", nullable=false)
     */
    private $organizationId;

    /**
     * @var bigint $registrationTs
     *
     * @Column(name="registration_ts", type="bigint", nullable=false)
     */
    private $registrationTs;

    /**
     * @var bigint $unregistrationTs
     *
     * @Column(name="unregistration_ts", type="bigint", nullable=false)
     */
    private $unregistrationTs;


}