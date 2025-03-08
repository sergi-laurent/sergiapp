<x-site-layout>

	<h1 class="font-bold text-4xl">ADMIN Articles</h1>

	<div class="text-right">
		<a href="{{route('admin.articles.create')}}" class="bg-purple-500 text-purple-50 uppercase p-2 hover:font-semibold rounded-sm">Create Article</a> 
	</div>

	
	<ul class="mt-12">
	    @foreach($articles as $article)
			
	        <li class="p-2 hover:bg-gray-50 flex justify-between">
				
					<a href="{{route('admin.articles.show', $article)}}">
						<h3 class="font-bold text-2xl">{{$article->title}}</h3>
						<p class="line-clamp-2">{{$article->content}}</p>
					</a>
                    
					<div class="flex justify-center items-center gap-2">
						<div>
							<a href="{{route('admin.articles.edit', $article)}}" 
							class="bg-purple-50 text-purple-500 p-1 px-2 uppercase hover:font-semibold rounded-sm">
								Edit
							</a>
						</div>
                    <form action="{{route('admin.articles.destroy', $article)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="bg-purple-50 text-purple-500 p-1 px-2 uppercase hover:font-semibold rounded-sm">Delete</button>
                    </form>
				</div>            
			</li>
	    @endforeach
	</ul>

</x-site-layout>