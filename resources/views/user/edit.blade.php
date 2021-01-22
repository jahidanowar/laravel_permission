<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('user.update',  $user->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <select name="roles[]" id="role" class="blok rounded shadow-sm" multiple>
                            @foreach ($roles as $id => $name)
                                <option value="{{$id}}" {{$user->role()->pluck('name', 'id')->contains($name) ? 'selected' : '' }}>{{$name}}</option>
                            @endforeach
                        </select>
                        <x-button class="ml-4">
                            {{ __('Update') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
