<h1>Hello from the view</h1>

<ul>
    @foreach($articles as $article)
        <li>{{$article->title}}</li>
    @endforeach
</ul>
