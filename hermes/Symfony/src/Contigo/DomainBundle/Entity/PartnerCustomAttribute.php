<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\PartnerCustomAttribute
 *
 * @Table(name="partner_custom_attribute")
 * @Entity
 */
class PartnerCustomAttribute
{
    /**
     * @var bigint $partnerId
     *
     * @Column(name="partner_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="partner_custom_attribute_partner_id_seq", allocationSize="1", initialValue="1")
     */
    private $partnerId;

    /**
     * @var string $externalWww
     *
     * @Column(name="external_www", type="string", length=100, nullable=true)
     */
    private $externalWww;

    /**
     * @var boolean $welcomeEmail
     *
     * @Column(name="welcome_email", type="boolean", nullable=false)
     */
    private $welcomeEmail;

    /**
     * @var boolean $termOfService
     *
     * @Column(name="term_of_service", type="boolean", nullable=false)
     */
    private $termOfService;

    /**
     * @var string $supportNo
     *
     * @Column(name="support_no", type="string", length=50, nullable=true)
     */
    private $supportNo;

    /**
     * @var string $htmlPageTitle
     *
     * @Column(name="html_page_title", type="string", length=200, nullable=true)
     */
    private $htmlPageTitle;

    /**
     * @var integer $ivrDefaultMinCheckinInterval
     *
     * @Column(name="ivr_default_min_checkin_interval", type="integer", nullable=true)
     */
    private $ivrDefaultMinCheckinInterval;

    /**
     * @var integer $ivrDefaultMaxCheckinInterval
     *
     * @Column(name="ivr_default_max_checkin_interval", type="integer", nullable=true)
     */
    private $ivrDefaultMaxCheckinInterval;

    /**
     * @var integer $ivrAbsMinCheckinInterval
     *
     * @Column(name="ivr_abs_min_checkin_interval", type="integer", nullable=true)
     */
    private $ivrAbsMinCheckinInterval;

    /**
     * @var integer $ivrAbsMaxCheckinInterval
     *
     * @Column(name="ivr_abs_max_checkin_interval", type="integer", nullable=true)
     */
    private $ivrAbsMaxCheckinInterval;

    /**
     * @var Contigo\DomainBundle\Entity\Customer
     *
     * @ManyToOne(targetEntity="Contigo\DomainBundle\Entity\Customer")
     * @JoinColumns({
     *   @JoinColumn(name="partner_id", referencedColumnName="id")
     * })
     */
    private $partner;


}