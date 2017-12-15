<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
