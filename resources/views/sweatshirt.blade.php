@extends('layouts.app')

@section('title')
    @foreach($data as $el)
        {{$el->path}}
    @endforeach
@endsection

@section('content')
    <link rel="stylesheet" href="/css/container_style.css">
    <div class="sort_type">Выбрать способ сортировки товаров</div>
    <div class="category_container">
        <a href="{{route('default')}}"><button class="btn btn-outline-dark">По умолчанию</button></a>
        <a href="{{route('reverse')}}"><button class="btn btn-outline-dark">В обратном порядке</button></a>
        <a href="{{route('created_at')}}"><button class="btn btn-outline-dark">По дате создания</button></a>
        <a href="{{route('updated_at')}}"><button class="btn btn-outline-dark">По дате обновления</button></a>
    </div>
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
