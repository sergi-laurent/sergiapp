<x-site-layout>
   
    <form action="/articles" method="post">

        @csrf

        <x-form-input name='title' label='Article title' placeholder='Write the title here'/>

        <div>
            Content</br>
            <textarea name="content" class="border border-purple-600">{{old('content')}}</textarea>
            @error('content')
            <div class="bg-red-100 p-2 text-red-500">
                {{$message}}
            </div>
            @enderror
        </div>


        <button type="submit">Create Article</button>

    </form> 

</x-site-layout>