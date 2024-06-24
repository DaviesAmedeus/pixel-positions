<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function employer(): BelongsTo {
        return $this->belongsTo(Employer::class);
    }
}