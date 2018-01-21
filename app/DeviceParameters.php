<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeviceParameters extends Model
{
    public $table = "device_parameters";

    protected $fillable = ['value'];
}

