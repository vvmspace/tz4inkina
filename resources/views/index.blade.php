
@extends('layout')

@section('page-title')
    Стена
    @endsection
@section('page-description')
    Место, где каждый может высказаться
    @endsection
@section('content')
    @guest
        @else
        {!! Form::open(['route' => ['store'], 'class' => 'mb-5' ]) !!}
        {{ csrf_field() }}
    <h3>Написать на стене</h3>
    <div class="form-group">
        <label for="title">Заголовок сообщение</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="form-group">
        <label for="text">Текст сообщения</label>
        <textarea id="text" class="form-control" rows="5" name="body" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Написать</button>
        {{ Form::close() }}
    @endguest

    @foreach($posts as $post)
        <div class="blog-post">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
            <p class="blog-post-meta">Опубликован {{ $post->created_at->format('Y.m.d') }}. Автор: {{ $post->user->name }}</p>

            <p>{{ $post->body }}</p>
        </div>

    @endforeach

@endsection
