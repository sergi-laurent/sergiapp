<x-site-layout>

    <x-form 
        :action="route('articles.update', $article)" 
        method="put" 
        title='Update Article' 
        :cancelurl="route('articles.show', $article)" 
        submittext="Update Article">

        <x-form-input name='title' label='Article title' placeholder='Write the title here' :value='$article->title'/>

        <x-form-text-area name='content' label='Article content' rows='7' placeholder='Write the content here' :value='$article->content'/>

    </x-form>
    
</x-site-layout>