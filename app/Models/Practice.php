<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    use HasFactory;
    public function practicecategory()
    {
        return $this->belongsTo(PracticeCate::class, 'practice_cate_id', 'id');
    }
}
