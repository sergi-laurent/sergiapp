<x-site-layout>

    <x-form 
        :action="route('articles.store')" 
        method="post" 
        title='Create Article' 
        :cancelurl="route('articles.index')"
        submittext="Create Article">

        <x-form-input name='title' label='Article title' placeholder='Write the title here'/>

        <x-form-text-area name='content' label='Article content' rows='7' placeholder='Write the content here'/>

    </x-form>

</x-site-layout>