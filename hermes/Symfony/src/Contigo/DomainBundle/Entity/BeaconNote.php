<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\BeaconNote
 *
 * @Table(name="beacon_note")
 * @Entity
 */
class BeaconNote
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="beacon_note_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $beaconId
     *
     * @Column(name="beacon_id", type="bigint", nullable=false)
     */
    private $beaconId;

    /**
     * @var bigint $assetId
     *
     * @Column(name="asset_id", type="bigint", nullable=true)
     */
    private $assetId;

    /**
     * @var bigint $dependentId
     *
     * @Column(name="dependent_id", type="bigint", nullable=true)
     */
    private $dependentId;

    /**
     * @var string $itemName
     *
     * @Column(name="item_name", type="string", length=100, nullable=true)
     */
    private $itemName;

    /**
     * @var string $registeredTo
     *
     * @Column(name="registered_to", type="string", length=255, nullable=true)
     */
    private $registeredTo;

    /**
     * @var bigint $subscriberId
     *
     * @Column(name="subscriber_id", type="bigint", nullable=true)
     */
    private $subscriberId;

    /**
     * @var bigint $organizationId
     *
     * @Column(name="organization_id", type="bigint", nullable=true)
     */
    private $organizationId;

    /**
     * @var string $noteType
     *
     * @Column(name="note_type", type="string", length=30, nullable=false)
     */
    private $noteType;

    /**
     * @var text $note
     *
     * @Column(name="note", type="text", nullable=true)
     */
    private $note;

    /**
     * @var bigint $regTs
     *
     * @Column(name="reg_ts", type="bigint", nullable=true)
     */
    private $regTs;

    /**
     * @var bigint $unregTs
     *
     * @Column(name="unreg_ts", type="bigint", nullable=true)
     */
    private $unregTs;

    /**
     * @var bigint $installTs
     *
     * @Column(name="install_ts", type="bigint", nullable=true)
     */
    private $installTs;

    /**
     * @var bigint $noteCreateTs
     *
     * @Column(name="note_create_ts", type="bigint", nullable=true)
     */
    private $noteCreateTs;

    /**
     * @var bigint $accessListId
     *
     * @Column(name="access_list_id", type="bigint", nullable=true)
     */
    private $accessListId;


}