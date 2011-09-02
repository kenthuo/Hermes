<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\TelusSoc
 *
 * @Table(name="telus_soc")
 * @Entity
 */
class TelusSoc
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="telus_soc_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $code
     *
     * @Column(name="code", type="string", length=20, nullable=false)
     */
    private $code;

    /**
     * @var string $telusServiceCode
     *
     * @Column(name="telus_service_code", type="string", length=20, nullable=false)
     */
    private $telusServiceCode;

    /**
     * @var string $description
     *
     * @Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string $propertyKey
     *
     * @Column(name="property_key", type="string", length=255, nullable=true)
     */
    private $propertyKey;

    /**
     * @var Contigo\DomainBundle\Entity\TelusService
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\TelusService")
     * @JoinColumns({
     *   @JoinColumn(name="telus_service_id", referencedColumnName="id")
     * })
     */
    private $telusService;


}