<?php

namespace App\Models;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lrequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'from',
        'end',
        'details',
        'status',
    ];

    protected $casts = [
        'from' => 'date',
        'end' => 'date',
        'status' => Status::class,
    ];

    public function ltype(): BelongsTo
    {
        return $this->belongsTo(Ltype::class);
    }
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
