<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function setEmailAttribute($value) {
        $this->attributes['email'] = empty($value) ? NULL : $value;
    }
}
