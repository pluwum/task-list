<?php

namespace App\MyApp;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //We define the mass assignable columns
    protected $fillable = [
        'name',
        'description',
        'state_id',
        'user_id'
    ];

    //Define user-task relationship
    public function user(){
        return $this->belongsTo('App\User');
    }
}
