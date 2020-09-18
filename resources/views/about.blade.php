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
            @foreach($data as $el)
            <span class="title2">{{$el->caption}}</span>
            @endforeach<br><br>
            <span class="text">
                @foreach($data as $el)
                    {{$el->main_content}}
                    <br><br>
                @endforeach
        </span>
        </div>
    </div>
@endsection
