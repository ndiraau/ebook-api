<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    	protected $ﬁllable = ['name','date_of_birth','place_of_birth','gender','email', 'hp'];
}
