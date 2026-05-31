<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['user_id', 'pickup_address', 'delivery_address', 'total_price', 'delivery_status_id'])]
class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use SoftDeletes, HasFactory;

    //Relationships

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function delivery(): HasOne
    {
        return $this->hasOne(Delivery::class);
    }

    public function deliverystatuse(): BelongsTo
    {
        return $this->belongsTo(DeliveryStatuse::class);
    }
}
