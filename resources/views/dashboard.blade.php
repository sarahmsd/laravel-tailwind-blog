<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 text-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="block my-4 p-2 rounded-lg bg-white text-green-500">{{session('success')}}</div>
            @endif
            @foreach ($posts as $post)
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg my-4">
                <div class="px-6 py-2 text-gray-900 dark:text-gray-100 flex justify-between">
                    <h3 class="text-lg ">{{$post->title}}</h3>
                    <div class="flex flex-wrap gap-2">
                        <a href="{{route('posts.edit', $post)}}" class="bg-yellow-500 px-3 py-1 my-auto">Editer</a>
                        <form method="POST" action="{{ route('posts.destroy', $post) }}" class="my-auto">
                            @csrf
                            @method('delete')
                            <a 
                                href="#" 
                                class="bg-red-500 px-3 py-1"
                                onclick="if(confirm('Voulez vous supprimer ce post?')){
                                    event.preventDefault();
                                    this.closest('form').submit();
                                }    
                            ">
                                Supprimer                                    
                            </a>
                        </form>
                    </div>
                </div>                
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
