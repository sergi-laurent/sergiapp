<h1>Hello from the view</h1>
<x-site-layout>

<ul>
    @foreach($articles as $article)
        <li><a href="/articles/{{$article->id}}"> {{$article->title}}</a></li>
    @endforeach
</ul>
</x-site-layout>