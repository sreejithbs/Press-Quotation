<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    public function work()
    {
    	return $this->hasOne(Work::class);
    }

    public function binding()
    {
    	return $this->hasOne(Binding::class);
    }
}
