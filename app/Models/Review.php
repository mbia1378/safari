<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'reviews';

    protected $fillable = ['review', 'rating', 'approval_status', 'room_booking_id'];

    public function room_booking(){

        return $this->belongsTo('App\Models\RoomBooking');
    }

}
