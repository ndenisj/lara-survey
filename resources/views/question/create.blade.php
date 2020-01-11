@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Question</div>

                <div class="card-body">
                    <form action="/questionnaires/{{$questionnaire->id}}/questions" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">QUESTION</label>
                            <textarea name="question[question]" class="form-control">{{old('question.question')}}</textarea>
                            @error('question.question') <span style="color:crimson; font-weight:bold;">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <fieldset>
                                <legend>Choices</legend>

                                <div>
                                    <div class="form-group">
                                        <label for="">Choice 1</label>
                                        <input value="{{old('answers.0.answer')}}" type="text" name="answers[][answer]" class="form-control">
                                        @error('answers.0.answer') <span style="color:crimson; font-weight:bold;">{{$message}}</span> @enderror
                                    </div>
                                </div>

                                <div>
                                    <div class="form-group">
                                        <label for="">Choice 2</label>
                                        <input value="{{old('answers.1.answer')}}" type="text" name="answers[][answer]" class="form-control">
                                        @error('answers.1.answer') <span style="color:crimson; font-weight:bold;">{{$message}}</span> @enderror
                                    </div>
                                </div>

                                <div>
                                    <div class="form-group">
                                        <label for="">Choice 3</label>
                                        <input value="{{old('answers.2.answer')}}" type="text" name="answers[][answer]" class="form-control">
                                        @error('answers.2.answer') <span style="color:crimson; font-weight:bold;">{{$message}}</span> @enderror
                                    </div>
                                </div>

                                <div>
                                    <div class="form-group">
                                        <label for="">Choice 4</label>
                                        <input value="{{old('answers.3.answer')}}" type="text" name="answers[][answer]" class="form-control">
                                        @error('answers.3.answer') <span style="color:crimson; font-weight:bold;">{{$message}}</span> @enderror
                                    </div>
                                </div>

                            </fieldset>
                        </div>

                        <button type="submit" class="btn btn-primary">Create Question</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
