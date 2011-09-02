<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\EventIndex
 *
 * @Table(name="event_index")
 * @Entity
 */
class EventIndex
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="event_index_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $eventName
     *
     * @Column(name="event_name", type="string", length=50, nullable=true)
     */
    private $eventName;

    /**
     * @var string $className
     *
     * @Column(name="class_name", type="string", length=50, nullable=true)
     */
    private $className;

    /**
     * @var string $tableName
     *
     * @Column(name="table_name", type="string", length=50, nullable=true)
     */
    private $tableName;

    /**
     * @var string $description
     *
     * @Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;


}