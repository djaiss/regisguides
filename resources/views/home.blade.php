@extends('welcome')

@section('content')
<h1 class="lh-copy f1 mb5">The Regis Guides for People Who Don’t Understand Internet Stuff But Still Wanna Say They Do</h1>

@foreach ($posts as $post)
<article>
  <h2 class="mb1"><a href="posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
  <p class="mt0 f6 mb4">Posted on {{ $post->created_at->format('F d, o') }}</p>
  <img src="https://pbs.twimg.com/media/EBx3IGFW4AILV-j?format=jpg&name=medium" class="ba b--mid-gray br3 pa2">
</article>
@endforeach
@endsection
