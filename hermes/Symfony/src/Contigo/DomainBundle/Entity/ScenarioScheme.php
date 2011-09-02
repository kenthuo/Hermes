<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ScenarioScheme
 *
 * @Table(name="scenario_scheme")
 * @Entity
 */
class ScenarioScheme
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="scenario_scheme_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var Contigo\DomainBundle\Entity\NotificationScheme
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\NotificationScheme")
     * @JoinColumns({
     *   @JoinColumn(name="notification_scheme_id", referencedColumnName="id")
     * })
     */
    private $notificationScheme;

    /**
     * @var Contigo\DomainBundle\Entity\Scenario
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Scenario")
     * @JoinColumns({
     *   @JoinColumn(name="scenario_id", referencedColumnName="id")
     * })
     */
    private $scenario;


}