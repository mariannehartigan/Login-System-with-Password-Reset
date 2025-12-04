<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{    
    use HasFactory;
    
    protected $fillable = ['description'];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(
            \App\Models\User::class, 'userId'
        );
    }
}
