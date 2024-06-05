<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'kana', 'email', 'email_validation', 'body', 'finished', 'staff_id'];

    public function staff(): BelongsTo
    {
        return $this->belongsTo(Staff::class);
    }
}
