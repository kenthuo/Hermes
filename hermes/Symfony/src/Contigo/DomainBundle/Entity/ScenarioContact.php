<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ScenarioContact
 *
 * @Table(name="scenario_contact")
 * @Entity
 */
class ScenarioContact
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="scenario_contact_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $introTs
     *
     * @Column(name="intro_ts", type="bigint", nullable=false)
     */
    private $introTs;

    /**
     * @var bigint $retireTs
     *
     * @Column(name="retire_ts", type="bigint", nullable=false)
     */
    private $retireTs;

    /**
     * @var Contigo\DomainBundle\Entity\Scenario
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Scenario")
     * @JoinColumns({
     *   @JoinColumn(name="scenario_id", referencedColumnName="id")
     * })
     */
    private $scenario;

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
     * @var Contigo\DomainBundle\Entity\Email
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Email")
     * @JoinColumns({
     *   @JoinColumn(name="email_id", referencedColumnName="id")
     * })
     */
    private $email;


}