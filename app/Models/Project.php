<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = ['user_id','title', 'github_link', 'description'];


    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }
}
