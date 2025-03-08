<x-site-layout>

    <div class="max-w-6xl mx-auto grid grid-cols-3">
        <div class="col-span-2">
            <h3 class="font-semibold">Latest Articles</h3>
            <ul>
                @foreach ( $articles as $article )
                    <li>
                        <h2>{{ $article->title }}</h2>
                    </li> 
                @endforeach
            </ul>
        </div>

        <div class="bg-purple-50 p-4">
            <h3 class="font-semibold">Our Top Authors</h3>
            <ul>
                @foreach ( $authors as $author )
                    <li>
                        {{ $author->name }}
                    </li> 
                @endforeach
            </ul>
        </div>
    </div>

</x-site-layout>