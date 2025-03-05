<x-site-layout>
    
    <form action="/articles/{{$article->id}}" method="post">

        @csrf
        @method("put")


        <div>
            Content</br>
            <textarea name="content" class="border border-purple-600">{{old('content') ?? $article->content}}</textarea>
            @error('content')
            <div class="bg-red-100 p-2 text-red-500">
                {{$message}}
            </div>
            @enderror
        </div>

        
        <x-form-input name='title' label='Article title' placeholder='Write the title here' :value='$article->title'/>


        <button type="submit">Update Article</button>

    </form> 

</x-site-layout>