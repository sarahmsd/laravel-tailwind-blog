<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mini Blog') }}
        </h2>
    </x-slot>

    <!-- component -->
    <div class="overflow-x-hidden ">
        <div class="px-6 py-8">
            <div class="container flex justify-between mx-auto">
                @foreach($errors->all() as $error)
                    <span class="block text-red-500">{{$error}}</span>
                @endforeach
                <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="my-4">
                        <x-input-label for="title" :value="__('Title')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" autofocus />
                        @if (false)
                            <span class="block text-red-500">{{$errors->title}}</span>
                        @endif
                    </div>
                    <div class="my-4">
                        <x-input-label for="content" :value="__('Contenu')" />
                        <textarea name="content" id="content" class="block mt-1 w-full bg-transparent rounded-md" ></textarea>
                    </div>

                    <div class="my-4">
                        <x-input-label for="image" :value="__('Image du post')" />
                        <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" />
                    </div>

                    <div class="my-4">
                        <x-input-label for="category" :value="__('Categorie du post')" />
                        <select name="category" id="category" class="block mt-1 w-full bg-transparent rounded-md">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="my-4">
                        <x-primary-button class="ml-3">
                            {{ __('Creer') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>