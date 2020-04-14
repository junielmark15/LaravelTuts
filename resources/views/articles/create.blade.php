@extends('layout')
@section('head')
<link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@endsection
@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>New Article</h1>
            
            <form action="/articles" method="POST">
                @csrf
                <div class="field">
                    <label class="label" for="Title">Title</label>

                    <div class="control">
                        <input type="text" class="input" name="title" id="title" value="{{ old('title') }}">
                        
                        {{-- @if ($errors->has('title'))
                            <p>{{ $errors->first('title') }}</p>
                        @endif --}}
                        @error('title')
                            <p>{{ $errors->first('title') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label for="excerpt" class="label">Exceprt</label>
                    
                    <div class="control">
                        <input type="text" class="input" name="excerpt" id="excerpt" value="{{ old('excerpt') }}">
                        @error('excerpt')
                            <p>{{ $errors->first('excerpt') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label for="body" class="label">Body</label>
                    
                    <div class="control">
                        <input type="text" class="input" name="body" id="body" value="{{ old('body') }}">
                        @error('body')
                            <p>{{ $errors->first('body') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" class="button is-link">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection