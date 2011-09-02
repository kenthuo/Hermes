<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DependentIvrPhone
 *
 * @Table(name="dependent_ivr_phone")
 * @Entity
 */
class DependentIvrPhone
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="dependent_ivr_phone_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var smallint $callSequence
     *
     * @Column(name="call_sequence", type="smallint", nullable=false)
     */
    private $callSequence;

    /**
     * @var bigint $createTs
     *
     * @Column(name="create_ts", type="bigint", nullable=false)
     */
    private $createTs;

    /**
     * @var Contigo\DomainBundle\Entity\Phone
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Phone")
     * @JoinColumns({
     *   @JoinColumn(name="phone_id", referencedColumnName="id")
     * })
     */
    private $phone;

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