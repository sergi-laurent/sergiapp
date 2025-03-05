<x-site-layout>

    <x-form 
        action="/articles/{{$article->id}}" 
        method="put" 
        title='Update Article' 
        cancelurl="/articles/{{$article->id}}" 
        submittext="Update Article">

        <x-form-input name='title' label='Article title' placeholder='Write the title here' :value='$article->title'/>

        <x-form-text-area name='content' label='Article content' rows='7' placeholder='Write the content here' :value='$article->content'/>

    </x-form>
    
</x-site-layout>