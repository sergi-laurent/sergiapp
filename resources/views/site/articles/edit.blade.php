<x-site-layout>
    
    <form action="/articles/{{$article->id}}" method="post">

        @csrf
        @method("put")



        
        <x-form-input name='title' label='Article title' placeholder='Write the title here' :value='$article->title'/>

        <x-form-text-area name='content' label='Article content' rows='7' placeholder='Write the content here' :value='$article->content'/>

        <button type="submit">Update Article</button>

    </form> 

</x-site-layout>