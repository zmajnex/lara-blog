@include('layouts.app')
@section('content')

<div class="mt-10">All Articles</div>

    @foreach($articles as $article)
     <p>{{$article->title}}</p>
    @endforeach

{{ $articles->links()}}
@show
