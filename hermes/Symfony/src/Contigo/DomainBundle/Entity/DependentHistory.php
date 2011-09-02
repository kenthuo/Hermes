<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DependentHistory
 *
 * @Table(name="dependent_history")
 * @Entity
 */
class DependentHistory
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="dependent_history_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $organizationId
     *
     * @Column(name="organization_id", type="bigint", nullable=true)
     */
    private $organizationId;

    /**
     * @var bigint $subscriberId
     *
     * @Column(name="subscriber_id", type="bigint", nullable=true)
     */
    private $subscriberId;

    /**
     * @var string $gender
     *
     * @Column(name="gender", type="string", length=20, nullable=true)
     */
    private $gender;

    /**
     * @var float $weightKg
     *
     * @Column(name="weight_kg", type="float", nullable=true)
     */
    private $weightKg;

    /**
     * @var string $title
     *
     * @Column(name="title", type="string", length=20, nullable=true)
     */
    private $title;

    /**
     * @var string $firstName
     *
     * @Column(name="first_name", type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @var string $nickname
     *
     * @Column(name="nickname", type="string", length=255, nullable=true)
     */
    private $nickname;

    /**
     * @var string $lastName
     *
     * @Column(name="last_name", type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @var string $middleInitial
     *
     * @Column(name="middle_initial", type="string", length=255, nullable=true)
     */
    private $middleInitial;

    /**
     * @var string $suffix
     *
     * @Column(name="suffix", type="string", length=20, nullable=true)
     */
    private $suffix;

    /**
     * @var datetime $birthdate
     *
     * @Column(name="birthdate", type="datetime", nullable=true)
     */
    private $birthdate;

    /**
     * @var float $heightInches
     *
     * @Column(name="height_inches", type="float", nullable=true)
     */
    private $heightInches;

    /**
     * @var float $heightCm
     *
     * @Column(name="height_cm", type="float", nullable=true)
     */
    private $heightCm;

    /**
     * @var float $weightLb
     *
     * @Column(name="weight_lb", type="float", nullable=true)
     */
    private $weightLb;

    /**
     * @var string $eyeColor
     *
     * @Column(name="eye_color", type="string", length=30, nullable=true)
     */
    private $eyeColor;

    /**
     * @var string $hairColor
     *
     * @Column(name="hair_color", type="string", length=30, nullable=true)
     */
    private $hairColor;

    /**
     * @var string $uniqueMark
     *
     * @Column(name="unique_mark", type="string", length=255, nullable=true)
     */
    private $uniqueMark;

    /**
     * @var string $miscInfo
     *
     * @Column(name="misc_info", type="string", length=255, nullable=true)
     */
    private $miscInfo;

    /**
     * @var string $relationship
     *
     * @Column(name="relationship", type="string", length=255, nullable=true)
     */
    private $relationship;

    /**
     * @var string $status
     *
     * @Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @var float $timezone
     *
     * @Column(name="timezone", type="float", nullable=true)
     */
    private $timezone;

    /**
     * @var boolean $daylightSaving
     *
     * @Column(name="daylight_saving", type="boolean", nullable=true)
     */
    private $daylightSaving;

    /**
     * @var bigint $xid
     *
     * @Column(name="xid", type="bigint", nullable=false)
     */
    private $xid;

    /**
     * @var boolean $isDeleted
     *
     * @Column(name="is_deleted", type="boolean", nullable=true)
     */
    private $isDeleted;

    /**
     * @var bigint $timestamp
     *
     * @Column(name="timestamp", type="bigint", nullable=true)
     */
    private $timestamp;

    /**
     * @var bigint $accessListId
     *
     * @Column(name="access_list_id", type="bigint", nullable=true)
     */
    private $accessListId;

    /**
     * @var bigint $iconId
     *
     * @Column(name="icon_id", type="bigint", nullable=true)
     */
    private $iconId;

    /**
     * @var string $medCondition
     *
     * @Column(name="med_condition", type="string", length=255, nullable=true)
     */
    private $medCondition;


}