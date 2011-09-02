<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DepartmentNg
 *
 * @Table(name="department_ng")
 * @Entity
 */
class DepartmentNg
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="department_ng_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var boolean $isSharable
     *
     * @Column(name="is_sharable", type="boolean", nullable=false)
     */
    private $isSharable;

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
     * @var Contigo\DomainBundle\Entity\NotificationScheme
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\NotificationScheme")
     * @JoinColumns({
     *   @JoinColumn(name="notification_scheme_id", referencedColumnName="id")
     * })
     */
    private $notificationScheme;

    /**
     * @var Contigo\DomainBundle\Entity\Department
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Department")
     * @JoinColumns({
     *   @JoinColumn(name="department_id", referencedColumnName="id")
     * })
     */
    private $department;


}