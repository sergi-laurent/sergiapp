<x-site-layout>

    <x-form 
        action="/articles" 
        method="post" 
        title='Create Article' 
        cancelurl="/articles" 
        submittext="Create Article">

        <x-form-input name='title' label='Article title' placeholder='Write the title here'/>

        <x-form-text-area name='content' label='Article content' rows='7' placeholder='Write the content here'/>

    </x-form>

</x-site-layout>