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
                    @foreach($data as $el)
                        <span class="text">{{$el->caption}}</span>
                    @endforeach
            </div>
        </div>
        <div class="container title">
            <span class="item" id="items">Товары</span><br><br>
            <span class="item">Свитшоты, футболки, юбки, тренчи,<br>
            джинсы, шарфы, сумки, блокноты</span>
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
