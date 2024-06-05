<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Information extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'important', 'staff_id'];

    public function staff(): BelongsTo
    {
        return $this->belongsTo(Staff::class);
    }
}
