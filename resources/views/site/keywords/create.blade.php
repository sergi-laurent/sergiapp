<x-site-layout>

    <x-form 
        :action="route('keywords.store')" 
        method="post" 
        title='Create Keyword' 
        :cancelurl="route('keywords.index')" 
        submittext="Create Keyword">

        <x-form-input name='title' label='Keyword title' placeholder='Write the keyword here'/>

    </x-form>
    
</x-site-layout>