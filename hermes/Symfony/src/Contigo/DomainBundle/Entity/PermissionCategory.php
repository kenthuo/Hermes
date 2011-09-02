<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\PermissionCategory
 *
 * @Table(name="permission_category")
 * @Entity
 */
class PermissionCategory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="permission_category_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $mnemonic
     *
     * @Column(name="mnemonic", type="string", length=40, nullable=false)
     */
    private $mnemonic;

    /**
     * @var string $description
     *
     * @Column(name="description", type="string", length=100, nullable=false)
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
     * @Column(name="retire_ts", type="bigint", nullable=false)
     */
    private $retireTs;


}