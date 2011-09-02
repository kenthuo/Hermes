<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Timers
 *
 * @Table(name="timers")
 * @Entity
 */
class Timers
{
    /**
     * @var string $timerid
     *
     * @Column(name="timerid", type="string", length=80, nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $timerid;

    /**
     * @var string $targetid
     *
     * @Column(name="targetid", type="string", length=80, nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $targetid;

    /**
     * @var datetime $initialdate
     *
     * @Column(name="initialdate", type="datetime", nullable=false)
     */
    private $initialdate;

    /**
     * @var bigint $timerinterval
     *
     * @Column(name="timerinterval", type="bigint", nullable=true)
     */
    private $timerinterval;

    /**
     * @var bytea $instancepk
     *
     * @Column(name="instancepk", type="bytea", nullable=true)
     */
    private $instancepk;

    /**
     * @var bytea $info
     *
     * @Column(name="info", type="bytea", nullable=true)
     */
    private $info;


}