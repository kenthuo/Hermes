<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DependentIvrNr
 *
 * @Table(name="dependent_ivr_nr")
 * @Entity
 */
class DependentIvrNr
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="dependent_ivr_nr_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bytea $nameRecording
     *
     * @Column(name="name_recording", type="bytea", nullable=true)
     */
    private $nameRecording;

    /**
     * @var bigint $nameRecordedOn
     *
     * @Column(name="name_recorded_on", type="bigint", nullable=true)
     */
    private $nameRecordedOn;

    /**
     * @var bytea $currentNameRecording
     *
     * @Column(name="current_name_recording", type="bytea", nullable=true)
     */
    private $currentNameRecording;

    /**
     * @var bigint $currentNameRecordedOn
     *
     * @Column(name="current_name_recorded_on", type="bigint", nullable=true)
     */
    private $currentNameRecordedOn;

    /**
     * @var Contigo\DomainBundle\Entity\Dependent
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Dependent")
     * @JoinColumns({
     *   @JoinColumn(name="dependent_id", referencedColumnName="id")
     * })
     */
    private $dependent;


}