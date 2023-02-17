
@props(['blog'])

<x-cart>
    <div class="flex">
        <img class="hidden w-48 aspect-ratio mr-6 md:block" src="{{asset('images/acme.png')}}" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/singleBlog/{{$blog->id}}">{{$blog->title}}</a>
            </h3>
            <div class="text-xl font-bold my-4">{{$blog->author}} <span class="text-gray-400 text-sm font-auto">(Author)</span> </div>
            <x-blog-tag :tagsCsv="$blog->tags" />
        </div>
    </div>
</x-cart>