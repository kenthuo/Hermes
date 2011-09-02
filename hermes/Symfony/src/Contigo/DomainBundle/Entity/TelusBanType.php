<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\TelusBanType
 *
 * @Table(name="telus_ban_type")
 * @Entity
 */
class TelusBanType
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="telus_ban_type_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $category
     *
     * @Column(name="category", type="string", length=25, nullable=false)
     */
    private $category;

    /**
     * @var string $code
     *
     * @Column(name="code", type="string", length=25, nullable=true)
     */
    private $code;


}