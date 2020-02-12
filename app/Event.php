<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'slug', 'date', 'organizer_id'];
    public function organizers() {
        return $this ->belongsTo('App\Organizers');
    }
    public $timestamps = false;
}
