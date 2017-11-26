<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Binding extends Model
{
    public function quotation()
    {
    	return $this->belongsTo(Quotation::class);
    }
}
