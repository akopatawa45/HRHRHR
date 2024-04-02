<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Ltype extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'count',
    ];

    public function lrequest(): HasOne
    {
        return $this->hasOne(Lrequest::class);
    }
}
