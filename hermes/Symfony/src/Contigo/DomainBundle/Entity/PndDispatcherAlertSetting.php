<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\PndDispatcherAlertSetting
 *
 * @Table(name="pnd_dispatcher_alert_setting")
 * @Entity
 */
class PndDispatcherAlertSetting
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="pnd_dispatcher_alert_setting_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var boolean $jobStatusVisibleAlert
     *
     * @Column(name="job_status_visible_alert", type="boolean", nullable=false)
     */
    private $jobStatusVisibleAlert;

    /**
     * @var boolean $jobStatusAudibleAlert
     *
     * @Column(name="job_status_audible_alert", type="boolean", nullable=false)
     */
    private $jobStatusAudibleAlert;

    /**
     * @var boolean $jobDeliveredAlert
     *
     * @Column(name="job_delivered_alert", type="boolean", nullable=false)
     */
    private $jobDeliveredAlert;

    /**
     * @var boolean $jobAckAlert
     *
     * @Column(name="job_ack_alert", type="boolean", nullable=false)
     */
    private $jobAckAlert;

    /**
     * @var boolean $jobVehEnrouteAlert
     *
     * @Column(name="job_veh_enroute_alert", type="boolean", nullable=false)
     */
    private $jobVehEnrouteAlert;

    /**
     * @var boolean $jobMarkedDoneAlert
     *
     * @Column(name="job_marked_done_alert", type="boolean", nullable=false)
     */
    private $jobMarkedDoneAlert;

    /**
     * @var boolean $jobDelByDriverAlert
     *
     * @Column(name="job_del_by_driver_alert", type="boolean", nullable=false)
     */
    private $jobDelByDriverAlert;

    /**
     * @var boolean $jobDeviceResyncIgnore
     *
     * @Column(name="job_device_resync_ignore", type="boolean", nullable=false)
     */
    private $jobDeviceResyncIgnore;

    /**
     * @var boolean $msgStatusVisibleAlert
     *
     * @Column(name="msg_status_visible_alert", type="boolean", nullable=false)
     */
    private $msgStatusVisibleAlert;

    /**
     * @var boolean $msgStatusAudibleAlert
     *
     * @Column(name="msg_status_audible_alert", type="boolean", nullable=false)
     */
    private $msgStatusAudibleAlert;

    /**
     * @var boolean $msgNewMsgRevdAlert
     *
     * @Column(name="msg_new_msg_revd_alert", type="boolean", nullable=false)
     */
    private $msgNewMsgRevdAlert;

    /**
     * @var boolean $msgDriverReplyAlert
     *
     * @Column(name="msg_driver_reply_alert", type="boolean", nullable=false)
     */
    private $msgDriverReplyAlert;

    /**
     * @var Contigo\DomainBundle\Entity\Login
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Login")
     * @JoinColumns({
     *   @JoinColumn(name="login_id", referencedColumnName="id")
     * })
     */
    private $login;


}