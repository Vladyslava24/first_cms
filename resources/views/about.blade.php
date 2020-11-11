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
    <link rel="stylesheet" href="/css/container_style.css">
    <div class="action" id="items">Акционные товары!</div>
    <div class="container">
        <div class="cards">
            @foreach($page as $el)
                <div class="card">
                    <div class="card_img">
                        <img src="images/{{$el->image}}">
                    </div>
                    <div class="card_text">
                        <div class="card_title">{{$el->main_content}}</div>
                        <div class="card_price">{{$el->price}}</div>
                    </div>
                    <a class="button2" href="{{route ('sweatshirt')}}">подивитись товар</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
