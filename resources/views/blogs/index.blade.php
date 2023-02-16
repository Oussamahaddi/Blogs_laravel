
<x-layout>

    {{-- include the partials from partials folder --}}
    @include('partials._hero')
    @include('partials._search')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        {{-- unless is similar to if else condition :: if not blogs < 0 , so there a blogs, then do this--}}
        @unless (count($blogs) < 0)

            {{-- loop of blogs  --}}
            @foreach ($blogs as $blog) 
                {{-- componenets blog car --}}
                <x-blog-cart :blog="$blog" />
            @endforeach

        @else
            <h1>There is No product</h1>
        @endunless

</x-layout>