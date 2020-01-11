<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Survey;

class SurveyResponse extends Model
{
    protected $guarded = [];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
}
