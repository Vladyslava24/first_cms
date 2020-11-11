@extends('admin.template')

@section('title')
    Update note
@endsection

@section('content')
    <form action="{{ route('note-update-submit', $data->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('inc.messages')
        <div class="form-group">
            <label for="image">Image</label>

            <input type="file" name="image" placeholder="Enter your main content" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="caption">Category</label>
            <input type="text" name="caption" value="{{ old('caption') }}" placeholder="Введите категорию товара" id="caption" class="form-control">
        </div>

        <div class="form-group">
            <label for="content">Main Content</label>
            <input type="text" name="main_content" value="{{ old('main_content') }}" placeholder="Enter your main content" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" value="{{ old('price') }}" placeholder="Enter price" id="price" class="form-control">
        </div>

        <div class="form-group">
            <label for="content_type">Content type</label>
            <input type="text" name="content_type" value="{{ old('content_type') }}" placeholder="Введите тип контенту" id="content_type" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Подтвердить</button>
    </form>
@endsection
