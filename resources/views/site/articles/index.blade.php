<x-site-layout>

	<h1 class="font-bold text-4xl">Hello from the view</h1>
	
	<ul class="grid grid-cols-3 gap-12 mt-12">
	    @foreach($articles as $article)
	        <li class="p-2 border-t border-t-black hover:bg-purple-50">
				<a href="/articles/{{$article->id}}">
					<h3 class="font-bold text-2xl">{{$article->title}}</h3>
					<p class="line-clamp-2">{{$article->content}}</p>
				</a>
			</li>
	    @endforeach
	</ul>
    
</x-site-layout>