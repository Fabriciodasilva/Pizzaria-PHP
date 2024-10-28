<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class confirmed extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "confirmed_id",
        "name",
        "price",
        "qtd"
    ];

    public function pizza(): BelongsToMany
    {
        return $this->belongsToMany(Pizza::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
