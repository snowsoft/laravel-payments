<?php

namespace Snow\Payments\Traits;

trait MorphsSchedules
{
    /**
     * Get all schedules.
     */
    public function schedules()
    {
        return $this->morphMany(config('payments.models.plan_subscription_schedule'), 'scheduleable');
    }
}
