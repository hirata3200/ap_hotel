<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restdata extends Model
{
    protected $table = 'reserve_table';
    protected $gurded = array('id');
    public static $rules = array(
        'name' => 'required',
        'address' => 'required'
    );
}
