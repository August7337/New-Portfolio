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
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (Session::has('success'))
                    <div class="text-lime-200">
                     {{ Session::get('success') }}
                    </div>
                    @endif
                    <h3 class="mb-4 text-xl">Create a post</h3>

                    <form action="{{ url('store') }}" method="post">
                        @csrf
                        <textarea name="editor" id="editor"></textarea>
                        <button class="rounded-lg bg-slate-900 w-full h-12 text-white mb-20 mt-8" type="submit">Submit</button>
                    </form>

                    <form enctype="multipart/form-data" action="{{ route('posts.store') }}" method="post">
                        @csrf
                        <div class="mb-4 flex flex-col">
                            <label for="title">Title</label>
                            <input type="text" id="title" placeholder="Title" name="title" value="{{ old('title') }}" 
                            class="rounded text-gray-800 dark:text-white bg-white dark:bg-gray-800">
                            @error('title')
                                <p class="text-red-300">{{ $message }}</p>
                            @enderror
                        </div>
    
                        <div class="mb-4 flex flex-col">
                            <label for="description">Description</label>
                            <textarea name="description" placeholder="Description" id="description" cols="30" rows="5" 
                            class="rounded text-gray-800 dark:text-white bg-white dark:bg-gray-800">{{ old('description') }}</textarea>
                            @error('description')
                                <p class="text-red-300">{{ $message }}</p>
                            @enderror
                        </div>
    
                        <div class="mb-8 flex flex-col">
                            <label for="image" class="">Image</label>
                            <input type="file" name="image" id="image" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600
                              file:bg-gray-50 file:border-0
                              file:me-4
                              file:py-3 file:px-4
                              dark:file:bg-gray-700 dark:file:text-gray-400">
                            @error('image')
                            <p class="text-red-300">{{ $message }}</p>
                            @enderror
                        </div>
    
                        <button class="rounded-lg bg-slate-900 w-full h-12 text-white mb-20">Submit</button>

                    </form>

                    <h3 class="mb-4 text-xl">All your posts</h3>

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Image
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Description
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Create at
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($posts->isNotEmpty())
                                    @foreach ($posts as $post)
                                        <tr class="bg-white border-b dark:bg-slate-900 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                                {{ $post->id }}
                                            </td>
                                            <td class="p-4">
                                                @if ($post->image != "")
                                                    <img width="50" src="{{asset('uploads/img/'.$post->image)}}" alt="" loading="lazy">
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                                {{ $post->title }}
                                            </td>
                                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                                {{ Str::limit($post->description, 250) }}
                                            </td>
                                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                                {{ \Carbon\Carbon::parse($post->created_at)->format('d M, Y') }}
                                            </td>
                                            <td class="px-6 py-4 flex flex-col">
                                                <a href="{{ route('posts.edit', $post->id) }}" class="mb-2 font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                                <a onclick="deletePost({{ $post->id }});" class="font-medium text-red-600 dark:text-red-500 hover:underline cursor-pointer">Remove</a>
                                                <form id="delete-post-from-{{ $post->id }}" action="{{ route('posts.destroy', $post->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach    
                                @endif
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        function deletePost(id){
            if (confirm("Are you sure you want to delete product?")) {
                document.getElementById("delete-post-from-"+id).submit();
            }
        }
    </script>
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


