<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterviewCate extends Model
{
    use HasFactory;
    public function interviews() {
        return $this->hasMany(Interview::class);
    }
}
