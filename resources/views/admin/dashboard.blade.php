<x-site-layout>

    <div>
        Admin Dashboard
        Your name is {{ auth()->user()->name }}
    </div>

    

    <div>
        <div class="flex justify-between">
            <h2 class="font-bold text-2xl">Your articles</h2>  

            <a href="{{route('admin.articles.create')}}" class="bg-purple-500 text-purple-50 uppercase p-2 hover:font-semibold rounded-sm">Create Article</a>
        </div>

        <ul class="list-disc pl-4">
            @foreach(auth()->user()->articles as $article)
                <li>{{ $article->title }}</li>
            @endforeach
        </ul>
    
    </div>

</x-site-layout>