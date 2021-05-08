<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Workshop;
use Carbon\Carbon;



class Event extends Model
{
    public function workshops()
    {
        return $this->hasMany(Workshop::class);
    }
    
    public function workshop()
    {
        return $this->workshops()->where('start','>', Carbon::now()->toDateTimeString());;
    }
}
