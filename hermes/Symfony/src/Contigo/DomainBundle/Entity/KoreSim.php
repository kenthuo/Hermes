<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\KoreSim
 *
 * @Table(name="kore_sim")
 * @Entity
 */
class KoreSim
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="kore_sim_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $imei
     *
     * @Column(name="imei", type="string", length=50, nullable=false)
     */
    private $imei;

    /**
     * @var string $min
     *
     * @Column(name="min", type="string", length=15, nullable=true)
     */
    private $min;

    /**
     * @var bigint $provisionedDate
     *
     * @Column(name="provisioned_date", type="bigint", nullable=true)
     */
    private $provisionedDate;


}