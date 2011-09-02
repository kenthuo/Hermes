<?php

namespace Contigo\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contigo\DomainBundle\Entity\EventDetailRptEvents
 *
 * @Table(name="event_detail_rpt_events")
 * @Entity
 */
class EventDetailRptEvents
{
    /**
     * @var bigint $id
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="event_detail_rpt_events_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var bigint $eventDetailRptId
     *
     * @Column(name="event_detail_rpt_id", type="bigint", nullable=true)
     */
    private $eventDetailRptId;

    /**
     * @var bigint $actionEventId
     *
     * @Column(name="action_event_id", type="bigint", nullable=true)
     */
    private $actionEventId;


}