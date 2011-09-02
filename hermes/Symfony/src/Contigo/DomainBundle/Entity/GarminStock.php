<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\GarminStock
 *
 * @Table(name="garmin_stock")
 * @Entity
 */
class GarminStock
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="garmin_stock_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $pndEsn
     *
     * @Column(name="pnd_esn", type="string", length=50, nullable=false)
     */
    private $pndEsn;

    /**
     * @var string $modelNumber
     *
     * @Column(name="model_number", type="string", length=10, nullable=false)
     */
    private $modelNumber;

    /**
     * @var string $fmiVersion
     *
     * @Column(name="fmi_version", type="string", length=10, nullable=false)
     */
    private $fmiVersion;

    /**
     * @var string $firmwareVersion
     *
     * @Column(name="firmware_version", type="string", length=50, nullable=false)
     */
    private $firmwareVersion;

    /**
     * @var bigint $lastLoginTs
     *
     * @Column(name="last_login_ts", type="bigint", nullable=false)
     */
    private $lastLoginTs;


}