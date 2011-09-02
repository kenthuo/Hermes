<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\TinyUrl
 *
 * @Table(name="tiny_url")
 * @Entity
 */
class TinyUrl
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="tiny_url_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $eventType
     *
     * @Column(name="event_type", type="string", length=20, nullable=false)
     */
    private $eventType;

    /**
     * @var string $hash
     *
     * @Column(name="hash", type="string", length=20, nullable=false)
     */
    private $hash;

    /**
     * @var text $fullUrl
     *
     * @Column(name="full_url", type="text", nullable=false)
     */
    private $fullUrl;

    /**
     * @var bigint $createdTs
     *
     * @Column(name="created_ts", type="bigint", nullable=true)
     */
    private $createdTs;


}