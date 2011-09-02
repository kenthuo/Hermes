<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\SystemMessageNonEnglish
 *
 * @Table(name="system_message_non_english")
 * @Entity
 */
class SystemMessageNonEnglish
{
    /**
     * @var bigint $systemMessageId
     *
     * @Column(name="system_message_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $systemMessageId;

    /**
     * @var string $locale
     *
     * @Column(name="locale", type="string", length=10, nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $locale;

    /**
     * @var text $notice
     *
     * @Column(name="notice", type="text", nullable=true)
     */
    private $notice;

    /**
     * @var text $status
     *
     * @Column(name="status", type="text", nullable=true)
     */
    private $status;

    /**
     * @var text $maintenance
     *
     * @Column(name="maintenance", type="text", nullable=true)
     */
    private $maintenance;

    /**
     * @var Contigo\DomainBundle\Entity\SystemMessage
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\SystemMessage")
     * @JoinColumns({
     *   @JoinColumn(name="system_message_id", referencedColumnName="id")
     * })
     */
    private $systemMessage;


}