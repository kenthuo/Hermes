<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\SystemCannedMsg
 *
 * @Table(name="system_canned_msg")
 * @Entity
 */
class SystemCannedMsg
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="system_canned_msg_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $type
     *
     * @Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var text $subject
     *
     * @Column(name="subject", type="text", nullable=false)
     */
    private $subject;

    /**
     * @var text $body
     *
     * @Column(name="body", type="text", nullable=true)
     */
    private $body;

    /**
     * @var string $paramName
     *
     * @Column(name="param_name", type="string", length=20, nullable=true)
     */
    private $paramName;

    /**
     * @var string $paramType
     *
     * @Column(name="param_type", type="string", length=20, nullable=true)
     */
    private $paramType;


}