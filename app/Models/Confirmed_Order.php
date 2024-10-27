<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Confirmed_Order extends Model
{
    use HasFactory;

    public function pizza(): BelongsToMany
    {
        return $this->belongsToMany(Pizza::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}