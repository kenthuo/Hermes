<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\TelusAccount
 *
 * @Table(name="telus_account")
 * @Entity
 */
class TelusAccount
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="telus_account_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $accountNumber
     *
     * @Column(name="account_number", type="string", nullable=true)
     */
    private $accountNumber;

    /**
     * @var string $socCode
     *
     * @Column(name="soc_code", type="string", nullable=true)
     */
    private $socCode;

    /**
     * @var string $min
     *
     * @Column(name="min", type="string", length=15, nullable=true)
     */
    private $min;

    /**
     * @var string $esn
     *
     * @Column(name="esn", type="string", length=50, nullable=true)
     */
    private $esn;

    /**
     * @var bigint $lastUpdatedTs
     *
     * @Column(name="last_updated_ts", type="bigint", nullable=true)
     */
    private $lastUpdatedTs;


}