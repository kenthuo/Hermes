<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\LojnChannel
 *
 * @Table(name="lojn_channel")
 * @Entity
 */
class LojnChannel
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="lojn_channel_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var text $name
     *
     * @Column(name="name", type="text", nullable=false)
     */
    private $name;

    /**
     * @var text $description
     *
     * @Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var boolean $isDefault
     *
     * @Column(name="is_default", type="boolean", nullable=false)
     */
    private $isDefault;

    /**
     * @var bigint $createdTs
     *
     * @Column(name="created_ts", type="bigint", nullable=false)
     */
    private $createdTs;

    /**
     * @var bigint $createdBy
     *
     * @Column(name="created_by", type="bigint", nullable=false)
     */
    private $createdBy;

    /**
     * @var bigint $updatedTs
     *
     * @Column(name="updated_ts", type="bigint", nullable=true)
     */
    private $updatedTs;

    /**
     * @var bigint $updatedBy
     *
     * @Column(name="updated_by", type="bigint", nullable=true)
     */
    private $updatedBy;


}