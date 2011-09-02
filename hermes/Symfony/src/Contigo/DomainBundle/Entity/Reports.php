<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Reports
 *
 * @Table(name="reports")
 * @Entity
 */
class Reports
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="reports_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var text $description
     *
     * @Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string $shortName
     *
     * @Column(name="short_name", type="string", length=25, nullable=true)
     */
    private $shortName;

    /**
     * @var string $fileName
     *
     * @Column(name="file_name", type="string", length=25, nullable=true)
     */
    private $fileName;

    /**
     * @var string $module
     *
     * @Column(name="module", type="string", length=25, nullable=true)
     */
    private $module;

    /**
     * @var integer $modulePriority
     *
     * @Column(name="module_priority", type="integer", nullable=true)
     */
    private $modulePriority;

    /**
     * @var integer $priority
     *
     * @Column(name="priority", type="integer", nullable=true)
     */
    private $priority;

    /**
     * @var string $type
     *
     * @Column(name="type", type="string", length=10, nullable=true)
     */
    private $type;

    /**
     * @var bigint $applnId
     *
     * @Column(name="appln_id", type="bigint", nullable=true)
     */
    private $applnId;

    /**
     * @var string $propertyKey
     *
     * @Column(name="property_key", type="string", length=255, nullable=true)
     */
    private $propertyKey;


}