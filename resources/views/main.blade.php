@extends('layouts.app')

@section('title')
    @foreach($data as $el)
        {{$el->path}}
    @endforeach
@endsection

@section('content')
    <div class="main">
        <div class="banner start">
            <div class="begin">
                <img src="pictures/landscape-1441134217-img-7084.jpg">
                <span class="text">Одежда по мотивам </span><span class="text" id="youtube">youtube </span>
                <span class="text">шоу</span><br>
                <span class="text">"Fashion is my profession"</span>
            </div>
        </div>
        <div class="container title">
            <span class="item" id="items">Товары</span><br><br>
            <span class="item">Свитшоты, футболки, юбки, тренчи,<br>
            джинсы, шарфы, сумки, блокноты</span>
            <br><br><br>
            <span class="item">Выбрать категорию товара</span>
            <div class="category">
                <a href="{{route('main')}}"><button class="btn btn-outline-dark">Показать все</button></a>
                <a href="{{route('jacket')}}"><button class="btn btn-outline-dark">Куртки</button></a>
                <a href="{{route('top')}}"><button class="btn btn-outline-dark">Верх</button></a>
                <a href="{{route('bottom')}}"><button class="btn btn-outline-dark">Низ</button></a>
                <a href="{{route('accessories')}}"><button class="btn btn-outline-dark">Аксесуары</button></a>
            </div>
        </div>
    </div>

    <div class="container content">
        <div class="row">
            @foreach($data as $el)
            <div class="col-sm-6">
                <div id="{{$el->image}}">
                    <span class="head">{{$el->main_content}}</span>
                    <button class="button"><a  class="inst" href="{{route ('sweatshirt')}}"><span>показать все</span></a></button>
                </div>
            </div>
        @endforeach
    </div>
    </div>
@endsection
