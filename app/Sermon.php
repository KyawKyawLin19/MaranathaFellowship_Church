<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sermon extends Model
{
    //
    protected $fillable = ['pastor_name','location','sermon_name','image','video','sermon_text','day','month'];
}
