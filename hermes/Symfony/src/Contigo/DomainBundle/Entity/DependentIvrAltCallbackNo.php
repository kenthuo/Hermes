<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DependentIvrAltCallbackNo
 *
 * @Table(name="dependent_ivr_alt_callback_no")
 * @Entity
 */
class DependentIvrAltCallbackNo
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="dependent_ivr_alt_callback_no_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $dependentId
     *
     * @Column(name="dependent_id", type="bigint", nullable=false)
     */
    private $dependentId;

    /**
     * @var string $alternatePhoneNo
     *
     * @Column(name="alternate_phone_no", type="string", length=50, nullable=false)
     */
    private $alternatePhoneNo;


}