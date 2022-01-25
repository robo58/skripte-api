<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable=[
        'rating','description','script_id','reviewer_id'
    ];

    public function script()
    {
        return $this->belongsTo(Script::class);
    }
    public function reviewer()
    {
        return $this->belongsTo(User::class);
    }
}
