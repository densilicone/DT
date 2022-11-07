@extends('articles.layout')

@section('content')
<div class="container">
    <div class="main">
        <div class="main__row">
            <div class="main__title">О контенте</div>
            <div class="main__btn">
                <a href="{{ route('articles.index') }}">Назад</a>
            </div>
        </div>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
            <div class="table_edit">
                <div class="second__row">
                    <div class="row">
                    <p class="row__item_text">Название</p>
                    <h1>{{ $article->title }}</h1>
                    </div>

                    <div class="row">
                        <p class="row__item_text">Описание</p>
                        <h1>{{ $article->description }}</h1>
                    </div>

                    <div class="row">
                    <p class="row__item_text">Цена</p>
                    <h1>{{$article->price}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection