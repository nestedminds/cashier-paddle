<?php

namespace Laravel\Paddle\Concerns;

use Laravel\Paddle\Receipt;

trait ManagesReceipts
{
    /**
     * Get all of the receipts for the Billable model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function receipts()
    {
        
        // to be able to have mongoid as foreign key
        //return $this->morphMany(Receipt::class, 'billable')->orderByDesc('created_at');
        return $this->hasMany(Receipt::class);
    }
}
