<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['type'])]

class DeliveryStatuse extends Model
{
    /** @use HasFactory<\Database\Factories\DeliveryStatuseFactory> */
    use HasFactory, SoftDeletes;

    //Relationships

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
