@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Questionnaire</div>

                <div class="card-body">
                    <form action="/questionnaires" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">TITLE</label>
                            <input type="text" name="title" class="form-control">
                            @error('title') <span style="color:crimson; font-weight:bold;">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="">PURPOSE</label>
                            <input type="text" name="purpose" class="form-control">
                            @error('purpose') <span style="color:crimson; font-weight:bold;">{{$message}}</span> @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Create Questionnaire</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
