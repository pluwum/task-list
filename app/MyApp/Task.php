<?php

namespace App\MyApp;

use Illuminate\Database\Eloquent\Model;
use Auth;
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
    // Filter the tasks user can access
    public function scopeViewableByMe($query){
        $user = Auth::user();
        //Check if user is an admin
        if($user->role == 1)
            return $query->get();
        // Return filtered if user is regular
        return $query->where('user_id', $user->id)->get();
    }
}
