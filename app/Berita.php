<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    public function getCreatedAtAttribute()
	{
	    return \Carbon\Carbon::parse($this->attributes['created_at'])
	       ->translatedFormat('j F Y');
	}

	public function getUpdatedAtAttribute()
	{
	    return \Carbon\Carbon::parse($this->attributes['updated_at'])
	       ->translatedFormat('j F Y');
	}
}
