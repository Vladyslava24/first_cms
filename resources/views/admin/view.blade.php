@extends('layouts.app')

@section('title')
    View Page
@endsection

@section('content')
    <link rel="stylesheet" href="/css/container_style.css">
    <div class="container">
        <div class="cards">
            @foreach($data as $el)
                <div class="card">
                    <div class="card_img">
                        <img src="images/{{$el->image}}">
                    </div>
                    <div class="card_text">
                        <div class="card_title">{{$el->main_content}}</div>
                        <div class="card_price">{{$el->price}}</div>
                    </div>
                    <a class="button2" href="#">выбрать размер</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
