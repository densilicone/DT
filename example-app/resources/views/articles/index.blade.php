    @extends('articles.layout')


    @section('content')

    @if ($message = Session::get('success'))
        <div class="alert">
        <p>{{$message}}</p>
        </div>
    @endif
<div class="container">
    <li class="table-header">
        <div class="col col-1">Название</div>
        <div class="col col-2">Описание</div>
        <div div class="col col-3">Цена</div>
        <div class="col col-4">Время</div>
        <div class="col col-5">Действие</div>
    </li>

    @foreach ($articles as $article)

    <li class="table-row">
        <div class="col col-teble col-1">{{$article->title}}</div>
        <div class="col col-teble col-2">{{$article->description}}</div>
        <div class="col col-teble col-3">{{$article->price}}</div>
        <div class="col col-teble col-4">{{$article->created_at}}</div>
        <div class="col col-teble col-5">
        <a class="btn btn-create" href="{{route('articles.create')}}">create</a>
        <a class="btn btn-Edit" href="{{ route('articles.edit', $article->id) }}">Edit</a>
        <a class="btn btn-show" href="{{route('articles.show', $article->id)}}">show</a>
        <hr>
        <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn-danger">Delete</button>
        </form>
        @endforeach
    </li>
</div>
@endsection
