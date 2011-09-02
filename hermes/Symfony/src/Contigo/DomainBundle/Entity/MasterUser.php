<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\MasterUser
 *
 * @Table(name="master_user")
 * @Entity
 */
class MasterUser
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="master_user_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $tableName
     *
     * @Column(name="table_name", type="string", length=100, nullable=true)
     */
    private $tableName;

    /**
     * @var bigint $tableId
     *
     * @Column(name="table_id", type="bigint", nullable=true)
     */
    private $tableId;


}