

<x-layout>
<div class="w-1/2 mx-auto">
    <a href="/" class="inline-block text-black ml-4 mb-4">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <x-cart class="bg-gray-50 border border-gray-200 p-10 rounded">
        <div class="flex flex-col items-center justify-center text-center" >
            <img class="w-48 mr-6 mb-6" src="{{asset('images/no-image.png')}}" alt="" />
            <h3 class="text-2xl mb-2">{{$blog->title}}</h3>
            <div class="text-lg my-4">
                {{$blog->author}}
            </div>
            {{-- use components blog tags with props tagsCsv --}}
            <x-blog-tag :tagsCsv="$blog->tags" />
            
            <div class="border border-gray-200 w-full mb-6"></div>
            <div>
                <h3 class="text-3xl font-bold mb-4"> Blog Description </h3>
                <div class="text-lg space-y-6">
                    <p>{{$blog->description}}</p>
                    <div class="flex justify-around">
                        <a href="#" class="rounded-xl bg-green-500 py-2 px-6 text-white" ><i class="fa-solid fa-edit"></i> Edit Blog</a>
                        <a href="#" class="rounded-xl bg-red-500 py-2 px-6 text-white" ><i class="fa-solid fa-trash"></i> Delete Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </x-cart>
</div>
</x-layout>