<x-layout>
    <h1>{{ $post->title }}</h1>
    <p>By <a href="author/{{ $post->author->username }}">{{ $post->author->name }}</a> in
        <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
    </p>
    {!! $post->body !!}
    <a href="/">Go Home</a>
</x-layout>
