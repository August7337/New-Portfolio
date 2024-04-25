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
                            <input type="text" id="title" placeholder="Title" name="title" value="{{ old('title',$post->title) }}" 
                            class="rounded text-gray-800 dark:text-white bg-white dark:bg-gray-800">
                            @error('title')
                                <p class="text-red-300">{{ $message }}</p>
                            @enderror
                        </div>
    
                        <div class="mb-4 flex flex-col">
                            <label for="description">Description</label>
                            <textarea name="description" placeholder="Description" id="description" cols="30" rows="5" 
                            class="rounded text-gray-800 dark:text-white bg-white dark:bg-gray-800">{{ old('description',$post->description) }}</textarea>
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
                            @if ($post->image != "")
                                <img width="250" src="{{asset('uploads/img/'.$post->image)}}" alt="" class="mt-8">
                            @endif
                        </div>
    
                        <button class="rounded-lg bg-slate-900 w-full h-12 text-white mb-20">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
