<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DriverPhoto
 *
 * @Table(name="driver_photo")
 * @Entity
 */
class DriverPhoto
{
    /**
     * @var bigint $guardianId
     *
     * @Column(name="guardian_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $guardianId;

    /**
     * @var string $type
     *
     * @Column(name="type", type="string", length=20, nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $type;

    /**
     * @var string $filetype
     *
     * @Column(name="filetype", type="string", length=50, nullable=true)
     */
    private $filetype;

    /**
     * @var string $filesize
     *
     * @Column(name="filesize", type="string", length=50, nullable=true)
     */
    private $filesize;

    /**
     * @var bytea $photo
     *
     * @Column(name="photo", type="bytea", nullable=true)
     */
    private $photo;

    /**
     * @var text $notes
     *
     * @Column(name="notes", type="text", nullable=true)
     */
    private $notes;

    /**
     * @var Contigo\DomainBundle\Entity\Guardian
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Guardian")
     * @JoinColumns({
     *   @JoinColumn(name="guardian_id", referencedColumnName="id")
     * })
     */
    private $guardian;


}