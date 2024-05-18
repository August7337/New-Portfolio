<style>
    .ck-editor__editable_inline {
        min-height: 300px;
        color: black;
    }
    .ck-editor__editable_inline img {
        max-height: 250px;
        width: auto;
    }
    .ck-editor__editable_inline h2 {
        font-size: 35px;
    }
    .ck-editor__editable_inline h3 {
        font-size: 30px;
    }
    .ck-editor__editable_inline h4 {
        font-size: 25px;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="mb-4 text-xl">Edit a post</h3>

                    <form enctype="multipart/form-data" action="{{ route('posts.update', $post->id) }}" method="post">
                        @method('put')
                        @csrf
                        <div class="mb-4 flex flex-col">
                            <label for="title">Title</label>
                            <input type="text" id="title" placeholder="Title" name="title" value="{{ old('title', $post->title) }}" 
                            class="rounded text-gray-800 dark:text-white bg-white dark:bg-gray-800">
                            @error('title')
                                <p class="text-red-300">{{ $message }}</p>
                            @enderror
                        </div>
    
                        <div class="mb-4 flex flex-col">
                            <label for="date">Date</label>
                            <input type="text" id="date" placeholder="Date" name="date" value="{{ old('date', $post->date) }}" 
                            class="rounded text-gray-800 dark:text-white bg-white dark:bg-gray-800">
                            @error('date')
                                <p class="text-red-300">{{ $message }}</p>
                            @enderror
                        </div>
    
                        <div class="mb-8 flex flex-col">
                            <label for="thumbnail" class="">Thumbnail</label>
                            <input type="file" name="thumbnail" id="thumbnail" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600
                              file:bg-gray-50 file:border-0
                              file:me-4
                              file:py-3 file:px-4
                              dark:file:bg-gray-700 dark:file:text-gray-400">
                            @error('thumbnail')
                            <p class="text-red-300">{{ $message }}</p>
                            @enderror
                        </div>

                        <textarea name="editor" id="editor">{{ old('html', $post->html) }}</textarea>
                        @error('html')
                            <p class="text-red-300">{{ $message }}</p>
                        @enderror
    
                        <button class="rounded-lg bg-slate-900 w-full h-12 text-white mb-20">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ),{
                ckfinder: {
                    uploadUrl: '{{route('upload').'?_token='.csrf_token()}}',
                }
            })
            .catch( error => {
                  
            } );
    </script>
</x-app-layout>
