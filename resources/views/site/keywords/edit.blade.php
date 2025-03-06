<x-site-layout>

    <x-form 
        :action="route('keywords.update', $keyword)" 
        method="put" 
        title='Update Keyword' 
        :cancelurl="route('keywords.show', $keyword)" 
        submittext="Update Keyword">

        <x-form-input name='title' label='Keyword title' placeholder='Write the title here' :value='$keyword->title'/>

    </x-form>
    
</x-site-layout>