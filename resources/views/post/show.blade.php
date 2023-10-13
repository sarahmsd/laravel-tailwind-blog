<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mini Blog | '. $post->title) }}
        </h2>
    </x-slot>

    <!-- component -->
    <div class="container text-white">
        <div class="px-6 py-8">
            <h2 class="text-2xl my-4">{{$post->title}}</h2>
            <div class="grid gap-4">
                <div class="grid items-center m-auto">
                    <img src="{{asset('/storage//'.$post->image)}}" alt="" srcset="">
                </div>
                <p>{{$post->content}}</p>
            </div>
        </div>
    </div>
</x-app-layout>