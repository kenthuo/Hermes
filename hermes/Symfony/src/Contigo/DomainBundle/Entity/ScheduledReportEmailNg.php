<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\ScheduledReportEmailNg
 *
 * @Table(name="scheduled_report_email_ng")
 * @Entity
 */
class ScheduledReportEmailNg
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="scheduled_report_email_ng_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var Contigo\DomainBundle\Entity\ScheduledReport
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\ScheduledReport")
     * @JoinColumns({
     *   @JoinColumn(name="scheduled_report_id", referencedColumnName="id")
     * })
     */
    private $scheduledReport;

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
     * @var Contigo\DomainBundle\Entity\Email
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Email")
     * @JoinColumns({
     *   @JoinColumn(name="email_id", referencedColumnName="id")
     * })
     */
    private $email;


}