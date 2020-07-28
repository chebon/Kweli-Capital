<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['title', 'location', 'price', 'number_of_bedrooms', 'number_of_bathrooms'];

    protected $table = 'properties';

}
