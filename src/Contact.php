<?php

namespace Hamiddj\ContactUs;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Eloquent
{
    use SoftDeletes;
     
    protected $fillable = ['email','name','title','text'];

}