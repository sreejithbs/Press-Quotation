<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    public function quotation()
    {
    	return $this->belongsTo(Quotation::class);
    }
}
