<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Icon
 *
 * @Table(name="icon")
 * @Entity
 */
class Icon
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="icon_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $filename
     *
     * @Column(name="filename", type="string", length=50, nullable=true)
     */
    private $filename;

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
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;


}