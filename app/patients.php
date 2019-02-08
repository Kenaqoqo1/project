<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    protected $fillable = [ 'firstName', 'secondName', 'gender', 'date_of_birth', 'parent_name', 'phoneWork', 'patiet_insuarance' ];
}
