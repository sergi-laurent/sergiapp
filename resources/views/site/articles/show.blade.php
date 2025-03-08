<x-site-layout>
	
	<h1 class="font-bold mb-4 text-4xl">{{$article->title}}</h1>
	<div class="mb-8">Article by <span class="font-semibold">{{$article->author->name}}</span></div>

	<p>
        {{$article->content}}
	</p>

	<x-article-contact-author :author="$article->author"/>

</x-site-layout>