<h1>Hello from the view</h1>

<ul>
    @foreach($articles as $article)
        <li><a href="/articles/{{$article->id}}"> {{$article->title}}</a></li>
    @endforeach
</ul>
