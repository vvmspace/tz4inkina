
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
    <form class="mb-5">
    <h3>Написать на стене</h3>
    <div class="form-group">
        <label for="title">Заголовок сообщение</label>
        <input type="text" class="form-control" id="title">
    </div>
    <div class="form-group">
        <label for="text">Текст сообщения</label>
        <textarea id="text" class="form-control" rows="5"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Написать</button>
</form>
    @endguest

<div class="blog-post">
    <h2 class="blog-post-title">Заголовок поста</h2>
    <p class="blog-post-meta">Опубликован 26.09.2017. Автор: Иван</p>

    <p>Очень важное по мнению автора сообщение</p>
</div>
<!-- /.blog-post -->

<div class="blog-post">
    <h2 class="blog-post-title">Заголовок поста</h2>
    <p class="blog-post-meta">Опубликован 26.09.2017. Автор: Иван</p>

    <p>Очень важное по мнению автора сообщение</p>
</div>
<!-- /.blog-post -->

<div class="blog-post">
    <h2 class="blog-post-title">Заголовок поста</h2>
    <p class="blog-post-meta">Опубликован 26.09.2017. Автор: Иван</p>

    <p>Очень важное по мнению автора сообщение</p>
</div>
<!-- /.blog-post -->

<div class="blog-post">
    <h2 class="blog-post-title">Заголовок поста</h2>
    <p class="blog-post-meta">Опубликован 26.09.2017. Автор: Иван</p>

    <p>Очень важное по мнению автора сообщение</p>
</div>
<!-- /.blog-post -->

<div class="blog-post">
    <h2 class="blog-post-title">Заголовок поста</h2>
    <p class="blog-post-meta">Опубликован 26.09.2017. Автор: Иван</p>

    <p>Очень важное по мнению автора сообщение</p>
</div>
<!-- /.blog-post -->
@endsection
