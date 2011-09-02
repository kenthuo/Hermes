<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\Solution
 *
 * @Table(name="solution")
 * @Entity
 */
class Solution
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="solution_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=40, nullable=false)
     */
    private $name;

    /**
     * @var bigint $introTs
     *
     * @Column(name="intro_ts", type="bigint", nullable=false)
     */
    private $introTs;

    /**
     * @var Contigo\DomainBundle\Entity\HomePageTemplate
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\HomePageTemplate")
     * @JoinColumns({
     *   @JoinColumn(name="home_page_template_id", referencedColumnName="id")
     * })
     */
    private $homePageTemplate;

    /**
     * @var Contigo\DomainBundle\Entity\Appln
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Appln")
     * @JoinColumns({
     *   @JoinColumn(name="appln_id", referencedColumnName="id")
     * })
     */
    private $appln;


}