<x-site-layout>
	
	<div class="text-right flex justify-end gap-2">
		<a href="{{route('admin.articles.edit', $article)}}" class="bg-purple-100 text-purple-500 uppercase p-2 hover:font-semibold rounded-sm">Edit Article</a>
		<form action="{{route('admin.articles.destroy', $article)}}" method="post">
			@method('DELETE')
			@csrf
			<button type="submit" class="bg-red-100 text-red-500 uppercase p-2 hover:font-semibold rounded-sm">Delete Article</button>
		</form>
	</div>
	
	@foreach($article->keywords as $keyword)
		<span class="bg-yellow-200 text-yellow-600 p-1">{{ $keyword->title }}</span>
	@endforeach

	<h1 class="font-bold mb-4 text-4xl">ADMIN {{$article->title}}</h1>

	<div class="my-8">Article by <span class="font-semibold">{{$article->author->name}}</span></div>

	<p>
        {{$article->content}}
	</p>

	<x-article-contact-author :author="$article->author"/>

</x-site-layout>