<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\DrvOrgPndCannedMsg
 *
 * @Table(name="drv_org_pnd_canned_msg")
 * @Entity
 */
class DrvOrgPndCannedMsg
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="drv_org_pnd_canned_msg_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $organizationId
     *
     * @Column(name="organization_id", type="bigint", nullable=false)
     */
    private $organizationId;

    /**
     * @var smallint $cannedMsgIdInPnd
     *
     * @Column(name="canned_msg_id_in_pnd", type="smallint", nullable=false)
     */
    private $cannedMsgIdInPnd;

    /**
     * @var text $cannedMsg
     *
     * @Column(name="canned_msg", type="text", nullable=false)
     */
    private $cannedMsg;

    /**
     * @var bigint $createdTs
     *
     * @Column(name="created_ts", type="bigint", nullable=false)
     */
    private $createdTs;

    /**
     * @var bigint $retiredTs
     *
     * @Column(name="retired_ts", type="bigint", nullable=false)
     */
    private $retiredTs;


}