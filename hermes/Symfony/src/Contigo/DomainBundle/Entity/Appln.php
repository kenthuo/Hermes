<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Appln
 *
 * @Table(name="appln")
 * @Entity
 */
class Appln
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="appln_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $mnemonic
     *
     * @Column(name="mnemonic", type="string", length=10, nullable=false)
     */
    private $mnemonic;

    /**
     * @var string $description
     *
     * @Column(name="description", type="string", length=50, nullable=false)
     */
    private $description;

    /**
     * @var bigint $introTs
     *
     * @Column(name="intro_ts", type="bigint", nullable=false)
     */
    private $introTs;

    /**
     * @var bigint $retireTs
     *
     * @Column(name="retire_ts", type="bigint", nullable=true)
     */
    private $retireTs;


}