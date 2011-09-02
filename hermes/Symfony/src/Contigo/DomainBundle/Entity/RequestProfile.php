<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\RequestProfile
 *
 * @Table(name="request_profile")
 * @Entity
 */
class RequestProfile
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="request_profile_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var text $profile
     *
     * @Column(name="profile", type="text", nullable=false)
     */
    private $profile;


}