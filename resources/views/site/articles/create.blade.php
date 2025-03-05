<x-site-layout>
   
    <form action="/articles" method="post">

        @csrf

        <x-form-input name='title' label='Article title' placeholder='Write the title here'/>

        <x-form-text-area name='content' label='Article content' rows='7' placeholder='Write the content here'/>


        <button type="submit">Create Article</button>

    </form> 

</x-site-layout>