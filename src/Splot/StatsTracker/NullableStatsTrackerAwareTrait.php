<?php
/**
 * Trait that takes care of setting a stats tracker if it's optional.
 * 
 * @package SplotStatsTracker
 * @author Michał Dudek <michal@michaldudek.pl>
 * 
 * @copyright Copyright (c) 2013, Michał Dudek
 * @license MIT
 */
namespace Splot\StatsTracker;

use Splot\StatsTracker\StatsTrackerInterface;
use Splot\StatsTracker\NullStatsTracker;

trait NullableStatsTrackerAwareTrait
{

    /**
     * The stats tracker.
     * 
     * @var StatsTrackerInterface
     */
    protected $statsTracker;

    /**
     * Sets a stats tracker and if no stats tracker specified it sets the tracker to be NullStatsTracker.
     * 
     * @param StatsTrackerInterface $statsTracker [optional] The stats tracker to be set.
     */
    public function setStatsTracker(StatsTrackerInterface $statsTracker = null) {
        $this->statsTracker = ($statsTracker === null) ? new NullStatsTracker() : $statsTracker;
    }

}