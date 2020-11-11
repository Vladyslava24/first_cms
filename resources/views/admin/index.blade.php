@extends('admin.template')

@section('title')
    Admin page
@endsection

@section('content')
    <form action="{{route('admin-save')}}" method="post" enctype="multipart/form-data">
        @csrf
        @include('inc.messages')
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" placeholder="Выберете картинку" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="caption">Category</label>
            <input type="text" name="caption" value="{{ old('caption') }}" placeholder="Введите категорию товара" id="caption" class="form-control">
        </div>

        <div class="form-group">
            <label for="content">Main Content</label>
            <input type="text" name="main_content" value="{{ old('main_content') }}" placeholder="Введите название товара" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" value="{{ old('price') }}" placeholder="Введите цену" id="price" class="form-control">
        </div>

        <div class="form-group">
            <label for="content_type">Content type</label>
            <input type="text" name="content_type" value="{{ old('content_type') }}" placeholder="Введите тип контенту" id="content_type" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Подтвердить</button>
    </form>

    <link rel="stylesheet" href="/css/container_style.css">
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
                    <div>
                        <a href="{{route('note-update', $el->id)}}"><button class="btn btn-outline-dark">Редактировать</button></a>
                        <a href="{{route('note-delete', $el->id) }}"><button class="btn btn-outline-danger">Удалить</button></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
