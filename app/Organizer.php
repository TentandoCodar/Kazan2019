<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Organizer extends Authenticatable
{
    protected $hidden = [
        'password_hash',
        'email',
    ];

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password_hash;
    }

    public function events() {
        return $this->hasMany('App\Event');
    }
}
