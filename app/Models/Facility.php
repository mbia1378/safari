<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $table = 'facilities';

    protected $fillable = ['name', 'icon', 'description', 'status'];

    public function room_types()
    {
        return $this->belongsToMany('App\Models\RoomType', 'facility_room_type')->withTimestamps();
    }

}
