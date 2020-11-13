<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class titleinfo extends Model
{
    protected $fillable = ['name','comment','status','email','title','description'];
}
