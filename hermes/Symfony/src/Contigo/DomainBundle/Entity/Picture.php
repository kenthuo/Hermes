<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Picture
 *
 * @Table(name="picture")
 * @Entity
 */
class Picture
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="picture_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $description
     *
     * @Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var datetime $datetime
     *
     * @Column(name="datetime", type="datetime", nullable=true)
     */
    private $datetime;

    /**
     * @var bytea $data
     *
     * @Column(name="data", type="bytea", nullable=true)
     */
    private $data;

    /**
     * @var string $filesize
     *
     * @Column(name="filesize", type="string", length=50, nullable=true)
     */
    private $filesize;

    /**
     * @var string $filetype
     *
     * @Column(name="filetype", type="string", length=50, nullable=true)
     */
    private $filetype;

    /**
     * @var Contigo\DomainBundle\Entity\Beaconmodel
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Beaconmodel")
     * @JoinColumns({
     *   @JoinColumn(name="beaconmodel_id", referencedColumnName="id")
     * })
     */
    private $beaconmodel;

    /**
     * @var Contigo\DomainBundle\Entity\Dependent
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Dependent")
     * @JoinColumns({
     *   @JoinColumn(name="dependent_id", referencedColumnName="id")
     * })
     */
    private $dependent;

    /**
     * @var Contigo\DomainBundle\Entity\Asset
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Asset")
     * @JoinColumns({
     *   @JoinColumn(name="asset_id", referencedColumnName="id")
     * })
     */
    private $asset;


}