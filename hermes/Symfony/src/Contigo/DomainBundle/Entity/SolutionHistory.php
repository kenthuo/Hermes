<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\SolutionHistory
 *
 * @Table(name="solution_history")
 * @Entity
 */
class SolutionHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="solution_history_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $applnId
     *
     * @Column(name="appln_id", type="bigint", nullable=false)
     */
    private $applnId;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=40, nullable=false)
     */
    private $name;

    /**
     * @var bigint $homePageTemplateId
     *
     * @Column(name="home_page_template_id", type="bigint", nullable=true)
     */
    private $homePageTemplateId;

    /**
     * @var bigint $introTs
     *
     * @Column(name="intro_ts", type="bigint", nullable=false)
     */
    private $introTs;

    /**
     * @var bigint $xid
     *
     * @Column(name="xid", type="bigint", nullable=false)
     */
    private $xid;

    /**
     * @var boolean $isDeleted
     *
     * @Column(name="is_deleted", type="boolean", nullable=true)
     */
    private $isDeleted;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=false)
     */
    private $timestamp;

    /**
     * @var bigint $accessListId
     *
     * @Column(name="access_list_id", type="bigint", nullable=true)
     */
    private $accessListId;


}