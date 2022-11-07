@extends('articles.layout')

@section('content')
<div class="container">
    <div class="main">
    <div class="main__row">
            <div class="main__title">Редактировать</div>
            <div class="main__btn">
                <a style="font-size:18px; text-decoration:none;" href="{{ route('articles.index') }}">Назад</a>
            </div>
        </div>
    </div>
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('articles.store') }}" method="POST">
    <div class="row_table">
        @csrf

        <div class="table_edit">
                <div class="second__row">
                    <div class="row">
                    <p class="row__item_text">Название</p>
                        <input class="row__item" type="text" name="title">
                    </div>

                    <div class="row">
                        <p class="row__item_text">Описание</p>
                        <input class="row__item" type="text" name="description">
                    </div>

                    <div class="row">
                    <p class="row__item_text">Цена</p>
                        <input class="row__item" type="text" name="price">
                    </div>

                    <div class="row">
                        <button class="row__item_submit" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
</form>
</div>
