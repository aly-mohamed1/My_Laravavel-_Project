<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['order_id', 'driver_id', 'assigned_at', 'delivered_at'])]

class Delivery extends Model
{
    /** @use HasFactory<\Database\Factories\DeliveryFactory> */
    use HasFactory, SoftDeletes;

    //Relationships

    public function driver(): BelongsTo
    {
        return $this-> belongsTo(Driver::class);
    }

    public function locations(): HasMany
    {
        return $this-> hasMany(Location::class);
    }

    public function order(): BelongsTo
    {
        return $this-> belongsTo(Order::class);
    }

    //Because the foreign keys are inside the deliveries table
}
