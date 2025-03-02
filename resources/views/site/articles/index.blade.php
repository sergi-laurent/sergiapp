<x-site-layout>

	<h1 class="font-bold text-2xl">Hello from the view</h1>
	
	<ul class="list-disc pl-4">
	    @foreach($articles as $article)
	        <li class="underline"><a href="/articles/{{$article->id}}"> {{$article->title}}</a></li>
	    @endforeach
	</ul>
    
</x-site-layout>