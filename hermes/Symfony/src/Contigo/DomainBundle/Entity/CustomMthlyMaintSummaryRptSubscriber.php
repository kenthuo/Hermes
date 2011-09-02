<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\CustomMthlyMaintSummaryRptSubscriber
 *
 * @Table(name="custom_mthly_maint_summary_rpt_subscriber")
 * @Entity
 */
class CustomMthlyMaintSummaryRptSubscriber
{
    /**
     * @var bigint $organizationId
     *
     * @Column(name="organization_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="custom_mthly_maint_summary_rpt_subscriber_organization_id_seq", allocationSize="1", initialValue="1")
     */
    private $organizationId;


}