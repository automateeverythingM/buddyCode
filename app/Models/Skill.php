<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $table = 'skills';

    public $primaryKey = 'id';
    
    public $timestamps = true;

    public function users()
    {
        return $this->belongsToMany('App\Models\User')->withTimestamps();
    }
}
