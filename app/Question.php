<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * Get the answers for the question.
     */
    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
}
