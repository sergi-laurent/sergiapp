<x-site-layout>


	<div class="text-right">
		<a href="{{route('articles.create')}}" class="bg-purple-500 text-purple-50 uppercase p-2 hover:font-semibold rounded-sm">Create Article</a> 
	</div>
	<h1 class="font-bold text-4xl">Articles</h1>

	
	<ul class="grid grid-cols-3 gap-12 mt-12">
	    @foreach($articles as $article)
	        <li class="p-2 border-t border-t-black hover:bg-purple-50">
				<a href="{{route('articles.show', $article)}}">
					<h3 class="font-bold text-2xl">{{$article->title}}</h3>
					<p class="line-clamp-2">{{$article->content}}</p>
				</a>
			</li>
	    @endforeach
	</ul>
    
</x-site-layout>