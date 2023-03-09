@extends('contohLayout.main')

@section('content')
    @foreach ($posts as $post )

    <article>
        <h2><a href="/pemanasanlaravel/blog/{{ $post['slug'] }}">{{ $post["tittle"] }}</a></h2>
        <h5>{{ $post["penulis"] }}</h5>
        <h5>{{ $post["email"] }}</h5>
        <p>{{ $post["post"] }}</p>
    </article>
    @endforeach
@endsection