@extends('welcome')

@section('content')
<h1 class="lh-copy f5 mb5">You are reading <em>The Regis Guides for People Who Don’t Understand Internet Stuff But Still Wanna Say They Do</em>.</h1>

<article>
  <h2 class="mb1"><a href="/understanding-models">{{ $post->title }}</a></h2>
  <p class="mt0 f6 mb4">Posted on {{ $post->created_at }}</p>
  <img src="https://pbs.twimg.com/media/EBx3IGFW4AILV-j?format=jpg&name=medium" class="ba b--mid-gray br3 pa2">
</article>
@endsection
