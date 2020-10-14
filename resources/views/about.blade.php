@extends('layouts.app')

@section('title')
    @foreach($data as $el)
        {{$el->path}}
    @endforeach
@endsection

@section('content')
    <link rel="stylesheet" href="/css/inform_style.css">
    <div class="container content">
        <div class="text">
            <br>
            <span class="title2">О нас</span>
            <br><br>
            <span class="text">
                @foreach($data as $el)
                    {{$el->main_content}}
                    <br><br>
                @endforeach
        </span>
        </div>
    </div>
@endsection
