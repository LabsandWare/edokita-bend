<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'why', 'photo', 'lab_name'
    ];


    /**
     * Get the patients for doctor.
     */
    public function patients()
    {
        return $this->hasMany('App\Models\Patients');
    }


    /**
     * Get the user that are doctor.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'foreign_key');
    }

}
