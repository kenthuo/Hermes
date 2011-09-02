<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\PndBeaconAssignment
 *
 * @Table(name="pnd_beacon_assignment")
 * @Entity
 */
class PndBeaconAssignment
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="pnd_beacon_assignment_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     */
    private $beaconId;

    /**
     * @var boolean $pndConnected
     *
     * @Column(name="pnd_connected", type="boolean", nullable=false)
     */
    private $pndConnected;

    /**
     * @var string $currPndEsn
     *
     * @Column(name="curr_pnd_esn", type="string", length=50, nullable=true)
     */
    private $currPndEsn;

    /**
     * @var string $currPndFmi
     *
     * @Column(name="curr_pnd_fmi", type="string", length=50, nullable=true)
     */
    private $currPndFmi;

    /**
     * @var string $currGarminProdId
     *
     * @Column(name="curr_garmin_prod_id", type="string", length=50, nullable=true)
     */
    private $currGarminProdId;

    /**
     * @var string $currDeviceFmi
     *
     * @Column(name="curr_device_fmi", type="string", length=50, nullable=true)
     */
    private $currDeviceFmi;

    /**
     * @var bigint $rcvdTs
     *
     * @Column(name="rcvd_ts", type="bigint", nullable=true)
     */
    private $rcvdTs;

    /**
     * @var string $lastPndEsn
     *
     * @Column(name="last_pnd_esn", type="string", length=50, nullable=true)
     */
    private $lastPndEsn;

    /**
     * @var string $lastPndFmi
     *
     * @Column(name="last_pnd_fmi", type="string", length=50, nullable=true)
     */
    private $lastPndFmi;

    /**
     * @var string $lastGarminProdId
     *
     * @Column(name="last_garmin_prod_id", type="string", length=50, nullable=true)
     */
    private $lastGarminProdId;

    /**
     * @var string $lastDeviceFmi
     *
     * @Column(name="last_device_fmi", type="string", length=50, nullable=true)
     */
    private $lastDeviceFmi;

    /**
     * @var bigint $lastRcvdTs
     *
     * @Column(name="last_rcvd_ts", type="bigint", nullable=true)
     */
    private $lastRcvdTs;

    /**
     * @var float $timezone
     *
     * @Column(name="timezone", type="float", nullable=true)
     */
    private $timezone;

    /**
     * @var string $tzAbbrev
     *
     * @Column(name="tz_abbrev", type="string", length=5, nullable=true)
     */
    private $tzAbbrev;

    /**
     * @var bigint $guardianId
     *
     * @Column(name="guardian_id", type="bigint", nullable=true)
     */
    private $guardianId;

    /**
     * @var string $pndDriverId
     *
     * @Column(name="pnd_driver_id", type="string", length=49, nullable=true)
     */
    private $pndDriverId;

    /**
     * @var bigint $lastGuardianId
     *
     * @Column(name="last_guardian_id", type="bigint", nullable=true)
     */
    private $lastGuardianId;

    /**
     * @var string $lastPndDriverId
     *
     * @Column(name="last_pnd_driver_id", type="string", length=49, nullable=true)
     */
    private $lastPndDriverId;

    /**
     * @var boolean $isLoginValid
     *
     * @Column(name="is_login_valid", type="boolean", nullable=true)
     */
    private $isLoginValid;


}