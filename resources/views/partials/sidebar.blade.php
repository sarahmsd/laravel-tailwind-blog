<div class="hidden w-4/12 -mx-8 lg:block">
        <div class="px-8">
                <h1 class="mb-4 text-xl font-bold text-gray-700">Filtrer par</h1>
                <select class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option>Latest</option>
                        <option>Last Week</option>
                </select>
        </div>
        <div class="px-8 mt-10">
                <h1 class="mb-4 text-xl font-bold text-gray-700">Categories</h1>
                <div class="flex flex-col max-w-sm px-4 py-6 mx-auto bg-white rounded-lg shadow-md">
                        <ul>
                                @isset($categories)
                                @foreach ($actegories as $cat)
                                <li>
                                        <a href="#" class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                                        {{$cat->name}}</a>
                                </li>
                                @endforeach
                                @endisset                        
                        </ul>
                </div>
        </div>
        <div class="px-8 mt-10">
                @isset($latest)
                <h1 class="mb-4 text-xl font-bold text-gray-700">Dernier Article</h1>
                <div class="flex flex-col max-w-sm px-8 py-6 mx-auto bg-white rounded-lg shadow-md">
                        <div class="flex items-center justify-center"><a href="#"
                                class="px-2 py-1 text-sm text-green-100 bg-gray-600 rounded hover:bg-gray-500">{{$latest->name}}</a>
                        </div>
                        <div class="mt-4"><a href="#" class="text-lg font-medium text-gray-700 hover:underline">Build
                                {{$latest->category->name}}</a></div>
                        <div class="flex items-center justify-between mt-4">
                        <div class="flex items-center"><img
                                src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                alt="avatar" class="object-cover w-8 h-8 rounded-full"><a href="#"
                                class="mx-3 text-sm text-gray-700 hover:underline">{{$latest->user->name}}</a></div><span
                                class="text-sm font-light text-gray-600">{{$latest->created_at->format('d M Y')}}</span>
                        </div>
                </div>
                @endisset
        </div>
</div>