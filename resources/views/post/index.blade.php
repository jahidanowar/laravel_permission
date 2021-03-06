<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul>
                        @foreach ($posts as $post)
                            <li class="p-3 bg-gray-100 m-2 border rounded flex justify-between align-middle">
                                <div class="self-center">
                                    {{$post->title}}
                                </div>
                                <div class="self-center">
                                    @foreach ($post->categories as $category)
                                        <span class="p-2 rounded text-xs bg-gray-800 text-white">{{$category->title}}</span>
                                    @endforeach
                                </div>
                                <div class="flex justify-items-end align-middle">
                                    <a href="{{route('post.edit', $post->id)}}" class="px-2 py-1 bg-indigo-600 text-white rounded">Edit</a>
                                    <form action="{{route('post.destroy', $post->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-2 py-1 bg-red-500 text-white rounded ml-2">Delete</button>
                                    </form>
                                </div>

                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
