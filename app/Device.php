<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    public $table = "device";

    protected $fillable = ['title', 'body'];

    /**
     * Get the parameters for the device.
     */
    public function parameters()
    {
        return $this->hasMany('App\DeviceParameters');
    }
}

