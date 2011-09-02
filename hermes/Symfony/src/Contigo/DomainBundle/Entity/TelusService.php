<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\TelusService
 *
 * @Table(name="telus_service")
 * @Entity
 */
class TelusService
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="telus_service_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $code
     *
     * @Column(name="code", type="string", length=20, nullable=false)
     */
    private $code;


}