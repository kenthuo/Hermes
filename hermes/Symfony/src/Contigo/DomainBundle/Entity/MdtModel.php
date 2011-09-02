<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\MdtModel
 *
 * @Table(name="mdt_model")
 * @Entity
 */
class MdtModel
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="mdt_model_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $model
     *
     * @Column(name="model", type="string", length=50, nullable=false)
     */
    private $model;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var text $description
     *
     * @Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string $color
     *
     * @Column(name="color", type="string", length=30, nullable=true)
     */
    private $color;

    /**
     * @var float $height
     *
     * @Column(name="height", type="float", nullable=true)
     */
    private $height;

    /**
     * @var float $width
     *
     * @Column(name="width", type="float", nullable=true)
     */
    private $width;

    /**
     * @var float $depth
     *
     * @Column(name="depth", type="float", nullable=true)
     */
    private $depth;

    /**
     * @var float $weight
     *
     * @Column(name="weight", type="float", nullable=true)
     */
    private $weight;

    /**
     * @var bytea $imageData
     *
     * @Column(name="image_data", type="bytea", nullable=true)
     */
    private $imageData;

    /**
     * @var string $imageFiletype
     *
     * @Column(name="image_filetype", type="string", length=50, nullable=true)
     */
    private $imageFiletype;

    /**
     * @var bigint $createdTs
     *
     * @Column(name="created_ts", type="bigint", nullable=false)
     */
    private $createdTs;

    /**
     * @var bigint $deletedTs
     *
     * @Column(name="deleted_ts", type="bigint", nullable=true)
     */
    private $deletedTs;


}