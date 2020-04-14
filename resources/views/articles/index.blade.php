@extends('layout')
@section('content')
<div id="page" class="container">
    <ul class="style1">
        @foreach ($articles as $article)
        <li class="first">
            <h3><a href="{{ $article->showpath() }}">{{ $article->title}}</a></h3>
            <p><a href="{{ $article->showpath() }}">{{ $article->excerpt }}</a></p>
        </li>
        @endforeach
    </ul> 
</div>
@endsection