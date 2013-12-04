<?php
/**
 * Common interface for tracking stats.
 * 
 * @package SplotStatsTracker
 * @author Michał Dudek <michal@michaldudek.pl>
 * 
 * @copyright Copyright (c) 2013, Michał Dudek
 * @license MIT
 */
namespace Splot\StatsTracker;

interface StatsTrackerInterface
{

    /**
     * Track an event that occured.
     * 
     * @param string $eventName Name of the event.
     * @param int $increment [optional] By how much should the stats be incremented? Default: 1.
     * @param array $data [optional] Any optional additional data to be logged alongside the event.
     *                    Might not be supported. Default: empty array.
     */
    public function track($eventName, $increment = 1, array $data = array());

}