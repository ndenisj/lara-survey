@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1>{{ $questionnaire->title }}</h1>

            <form action="/surveys/{{ $questionnaire->id }}-{{ Str::slug($questionnaire->title) }}" method="POST">
                @csrf

                @foreach ($questionnaire->questions as $key => $question)
                <div class="card mt-3">
                    <div class="card-header"><strong>Q{{$key + 1}}. </strong>{{$question->question}}</div>

                    <div class="card-body">

                        @error('responses.'.$key.'.answer_id')
                        <small style="color:crimson;">{{$message}}</small>
                        @enderror

                        <ul class="list-group">
                            @foreach ($question->answers as $answer)
                            <label for="answer{{ $answer->id}}">
                                <li class="list-group-item">
                                    <input type="radio" name="responses[{{$key}}][answer_id]" class="mr-2"
                                    {{ (old('responses.'.$key.'.answer_id') == $answer->id ) ? 'checked' : '' }} id="answer{{ $answer->id}}" value="{{ $answer->id }}">
                                    {{$answer->answer}}

                                    <input type="hidden" name="responses[{{$key}}][question_id]" value="{{ $question->id }}">
                                </li>
                            </label>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach

                <div class="card mt-3">
                    <div class="card-header">Your Information</div>

                    <div class="card-body">
                        <div class="form-group"> 
                            <label for="">Your NAME</label>
                            <input type="text" name="survey[name]" class="form-control" value="">
                            @error('survey.name') <span style="color:crimson; font-weight:bold;">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="">EMAIL</label>
                            <input type="email" name="survey[email]" class="form-control" value="">
                            @error('survey.email') <span style="color:crimson; font-weight:bold;">{{$message}}</span> @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-dark mt-2">Complete Survey</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
