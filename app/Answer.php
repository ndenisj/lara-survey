<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;
use App\SurveyResponse;

class Answer extends Model
{
    protected $guarded = [];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function responses()
    {
        return $this->hasMany(SurveyResponse::class);
    }
}
