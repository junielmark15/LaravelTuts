@extends('layout')
@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1>Update Article</h1>
        
    <form action="/articles/{{ $article->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="field">
                <label class="label" for="Title">Title</label>

                <div class="control">
                <input type="text" class="input" name="title" id="title" value="{{ $article->title }}">
                </div>
            </div>

            <div class="field">
                <label for="excerpt" class="label">Exceprt</label>
                
                <div class="control">
                    <input type="text" class="input" name="excerpt" id="excerpt" value="{{ $article->excerpt }}">
                </div>
            </div>

            <div class="field">
                <label for="body" class="label">Body</label>
                
                <div class="control">
                    <input type="text" class="input" name="body" id="body" value="{{ $article->body }}">
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