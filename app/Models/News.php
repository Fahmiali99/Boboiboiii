<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Authenticatable
{
    use HasFactory;
    protected $guarded = [];

    public function authors(){
        return $this->belongsTo(Authors::class);
        }
}