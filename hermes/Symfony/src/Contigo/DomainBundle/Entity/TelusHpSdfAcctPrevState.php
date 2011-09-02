<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\TelusHpSdfAcctPrevState
 *
 * @Table(name="telus_hp_sdf_acct_prev_state")
 * @Entity
 */
class TelusHpSdfAcctPrevState
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="telus_hp_sdf_acct_prev_state_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var decimal $telusSubscriberId
     *
     * @Column(name="telus_subscriber_id", type="decimal", nullable=false)
     */
    private $telusSubscriberId;

    /**
     * @var string $prevState
     *
     * @Column(name="prev_state", type="string", length=25, nullable=true)
     */
    private $prevState;

    /**
     * @var bigint $prevStateTs
     *
     * @Column(name="prev_state_ts", type="bigint", nullable=false)
     */
    private $prevStateTs;


}