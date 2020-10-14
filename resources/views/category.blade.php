@extends('layouts.app')

@section('title')
    @foreach($data as $el)
        {{$el->path}}
    @endforeach
@endsection

@section('content')

<div class="main">
    <div class="container title_category">
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

<div class="container content_category">
    <div class="row">
        @foreach($data as $el)
            <div class="col-sm-6">
                <div id="{{$el->image}}">
                    <span class="head_category">{{$el->main_content}}</span>
                    <button class="button_category"><a  class="inst" href="{{route ('sweatshirt')}}"><span>показать все</span></a></button>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
