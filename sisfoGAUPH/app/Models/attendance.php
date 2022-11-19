<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'attendances';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'class', 'room_id', 'location_id', 'attendance_collect_at', 'attendance_return_at', 'marker_return_at', 'marker_collect_at'];

    
}
