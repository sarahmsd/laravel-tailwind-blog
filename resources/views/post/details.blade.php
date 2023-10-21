<x-app-layout>
    <!-- component -->
    <div class="overflow-x-hidden">
            <div class="container flex justify-between mb-12 mx-12">
                <div class="w-full lg:w-8/12">
                    <div class="flex items-center justify-between">
                        <span class="font-light text-gray-600">
                            {{ $post->created_at->format('d M Y')}}
                        </span>
                        <a href="#"
                            class="px-2 py-1 font-bold text-gray-600 ">{{$post->category->name}}</a>
                    </div>                    
                    <div class="mt-2">
                        <h3 class="text-2xl font-bold text-gray-700">
                            {{ $post->title }}
                        </h3>                                               
                    </div>
                    <div class="grid items-center mx-auto my-auto">
                        <img src="{{asset('/storage//'.$post->image)}}" alt="" srcset="">
                    </div> 
                    <div class="mt-4">
                        <p class="mt-2 text-gray-600">
                            {{ $post->content }}
                        </p>
                    </div>
                </div>
                @include('partials.sidebar')
            </div>
        @include('partials.footer')
    </div>
</x-app-layout>