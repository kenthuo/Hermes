<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\TelusHpSdfAcct
 *
 * @Table(name="telus_hp_sdf_acct")
 * @Entity
 */
class TelusHpSdfAcct
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="telus_hp_sdf_acct_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var decimal $telusSubscriberId
     *
     * @Column(name="telus_subscriber_id", type="decimal", nullable=false)
     */
    private $telusSubscriberId;

    /**
     * @var bigint $groupId
     *
     * @Column(name="group_id", type="bigint", nullable=true)
     */
    private $groupId;

    /**
     * @var string $mdn
     *
     * @Column(name="mdn", type="string", length=20, nullable=false)
     */
    private $mdn;

    /**
     * @var string $serviceId
     *
     * @Column(name="service_id", type="string", length=18, nullable=true)
     */
    private $serviceId;

    /**
     * @var string $state
     *
     * @Column(name="state", type="string", length=25, nullable=true)
     */
    private $state;

    /**
     * @var bigint $lastStateTs
     *
     * @Column(name="last_state_ts", type="bigint", nullable=false)
     */
    private $lastStateTs;


}