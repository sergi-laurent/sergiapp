<x-site-layout>

    <x-form 
        :action="route('admin.articles.update', $article)" 
        method="put" 
        title='Update Article' 
        :cancelurl="route('admin.articles.show', $article)" 
        submittext="Update Article">

        <x-form-input name='title' label='Article title' placeholder='Write the title here' :value='$article->title'/>

        <x-form-text-area name='content' label='Article content' rows='7' placeholder='Write the content here' :value='$article->content'/>

        <x-form-checkbox 
            name="keywords" 
            label="Keywords"
            :options="\App\Models\Keyword::orderBy('title')->pluck('title', 'id')->toArray()"
            :values="$article->keywords->pluck('id')->toArray()" />
        
    </x-form>
    
</x-site-layout>