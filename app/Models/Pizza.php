<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pizza extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "ingredients",
        "price"

    ];


    public function order(): BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }
}
