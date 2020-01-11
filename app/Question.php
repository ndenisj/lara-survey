<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Questionnaire;
use App\Answer;
use App\SurveyResponse;

class Question extends Model
{
    protected $guarded = [];

    public function questionnaire()
    {
        return $this->belongsTo(Questionnaire::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function responses()
    {
        return $this->hasMany(SurveyResponse::class);
    }
}
