<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable=['name', 'script_id'];

    public function script()
    {
        return $this->belongsTo(Script::class);
    }
}
