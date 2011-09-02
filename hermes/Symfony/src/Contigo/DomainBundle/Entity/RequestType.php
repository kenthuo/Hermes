<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\RequestType
 *
 * @Table(name="request_type")
 * @Entity
 */
class RequestType
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="request_type_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var text $type
     *
     * @Column(name="type", type="text", nullable=false)
     */
    private $type;


}