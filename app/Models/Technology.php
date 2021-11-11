<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    protected $hidden = [
        'pivot',
        'created_at',
        'updated_at'
    ];

//    public function users(){
//        return $this->belongsToMany('App\Model\User');
//    }
}
