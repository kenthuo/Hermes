<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\MakeMdtModel
 *
 * @Table(name="make_mdt_model")
 * @Entity
 */
class MakeMdtModel
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="make_mdt_model_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $makeId
     *
     * @Column(name="make_id", type="bigint", nullable=false)
     */
    private $makeId;

    /**
     * @var bigint $createdTs
     *
     * @Column(name="created_ts", type="bigint", nullable=false)
     */
    private $createdTs;

    /**
     * @var bigint $deletedTs
     *
     * @Column(name="deleted_ts", type="bigint", nullable=false)
     */
    private $deletedTs;

    /**
     * @var Contigo\DomainBundle\Entity\MdtModel
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\MdtModel")
     * @JoinColumns({
     *   @JoinColumn(name="mdt_model_id", referencedColumnName="id")
     * })
     */
    private $mdtModel;


}