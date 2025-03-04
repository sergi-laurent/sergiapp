<x-site-layout>

	<div class="text-right">
		<a href="/articles/{{$article->id}}/edit" class="hover:font-semibold hover:text-purple-700">Edit Article</a>
		|
		<form action="/articles/{{$article->id}}" method="post">
			@method('DELETE')
			@csrf
		</form>

	</div>

	<h1 class="font-bold mb-4 text-4xl">{{$article->title}}</h1>
	<div class="mb-8">Article by <span class="font-semibold">{{$article->author->name}}</span></div>

	<p>
        {{$article->content}}
	</p>

	<x-article-contact-author :author="$article->author"/>

</x-site-layout>