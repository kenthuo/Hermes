<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\HomePageTemplate
 *
 * @Table(name="home_page_template")
 * @Entity
 */
class HomePageTemplate
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="home_page_template_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=30, nullable=false)
     */
    private $name;

    /**
     * @var string $filename
     *
     * @Column(name="filename", type="string", length=15, nullable=false)
     */
    private $filename;

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