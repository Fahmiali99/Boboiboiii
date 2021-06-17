<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authors extends Authenticatable
{
    use HasFactory;
    protected $guarded = [];

    public function News(){
        return $this->hasMany(News::class);
        }
}