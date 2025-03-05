<x-site-layout>

	<div class="text-right flex justify-end gap-2">
		<a href="/articles/{{$article->id}}/edit" class="bg-purple-100 text-purple-500 uppercase p-2 hover:font-semibold rounded-sm">Edit Article</a>
		<form action="/articles/{{$article->id}}" method="post">
			@method('DELETE')
			@csrf
			<button type="submit" class="bg-red-100 text-red-500 uppercase p-2 hover:font-semibold rounded-sm">Delete Article</button>
		</form>

	</div>

	<h1 class="font-bold mb-4 text-4xl">{{$article->title}}</h1>
	<div class="mb-8">Article by <span class="font-semibold">{{$article->author->name}}</span></div>

	<p>
        {{$article->content}}
	</p>

	<x-article-contact-author :author="$article->author"/>

</x-site-layout>