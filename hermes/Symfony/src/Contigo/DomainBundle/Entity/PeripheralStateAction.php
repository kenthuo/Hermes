<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\PeripheralStateAction
 *
 * @Table(name="peripheral_state_action")
 * @Entity
 */
class PeripheralStateAction
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="peripheral_state_action_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $peripheralStateId
     *
     * @Column(name="peripheral_state_id", type="bigint", nullable=false)
     */
    private $peripheralStateId;

    /**
     * @var bigint $allowedPsId
     *
     * @Column(name="allowed_ps_id", type="bigint", nullable=false)
     */
    private $allowedPsId;

    /**
     * @var string $allowedPsName
     *
     * @Column(name="allowed_ps_name", type="string", length=50, nullable=true)
     */
    private $allowedPsName;

    /**
     * @var boolean $isAllowedProvisioning
     *
     * @Column(name="is_allowed_provisioning", type="boolean", nullable=true)
     */
    private $isAllowedProvisioning;


}