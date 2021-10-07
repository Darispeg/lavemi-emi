<x-app-layout>
    <div class="container py-8 bg-white">

        <h2 class="text-center text-blue-emi text-4xl font-mono font-black ml-auto mr-auto py-6">
            LABORATORIO DE VERIFICACIÓN DE LA ESCUELA MILITAR DE INGENIERIA
        </h2>

        {{-- LAVEMI --}}
        <article class="m-5 bg-gray-100 rounded-2xl border-4 border-light-blue-500">
            <a class="block rounded-lg relative transform transition-all duration-300 scale-100 hover:scale-95 bg-cover bg-center">
                <img class="m-auto h-96 w-full"  src="{{ URL::asset('../img/poster.jpg') }}" alt="">
            </a>
        </article>
        {{-- Post Recientes --}}

        <div class="grid gap-6 pt-5 grid-cols-1 lg:grid-cols-2">
            @foreach ($posts as $post)
                <article class="my-7">
                    <h2 class="text-blue-emi text-xl leading-tight mb-3 pr-5">{{$post->name}}</h2>
                    <a href="{{route('posts.show', $post)}}" class="block rounded-lg relative p-10 transform transition-all duration-300 scale-100 hover:scale-95 bg-cover bg-center"
                                                    style="background:
                                                    url(@if ($post->image)
                                                            {{Storage::url($post->image->url)}}
                                                        @else
                                                            {{ URL::asset('../img/default-emi.jpg') }}
                                                        @endif) center; background-size: cover;">
                        <div class="absolute flex top-0 right-0 -mt-3 mr-3">
                            @foreach ($post->tags as $tag)
                                <div class="rounded-full bg-{{$tag->color}}-400 text-white text-xs py-1 pl-2 pr-3 leading-none font-bold">
                                    <i class="mdi mdi-fire text-base align-middle"></i><span class="align-middle">{{$tag->name}}</span>
                                </div>
                            @endforeach
                        </div>
                        <div class="h-48"></div>
                    </a>
                </article>
            @endforeach
        </div>

        {{-- Categorias --}}
        <div>
            <h2 class="title">Categorias</h2>
            <div class="pb-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                @foreach ($categories as $category)
                    <article class="mb-3">
                        <div class="flex w-full items-center">
                            <h2 class="m-auto text-2xl leading-tight font-serif text-dark p-5">{{$category->name}}</h2>
                        </div>
                        <a href="{{route('posts.category', $category)}}" class="block rounded-lg relative p-10 transform transition-all duration-300 scale-100 hover:scale-95 bg-cover bg-center"
                                                        style="background:
                                                        url(@if ($category->image)
                                                                {{Storage::url($category->image->url)}}
                                                            @else
                                                                {{ URL::asset('../img/category-emi.jpg') }}
                                                            @endif) center; background-size: cover;">
                            <div class="h-48">
                                <div class="flex w-full items-center text-xl justify-end">
                                    <div class="bg-yellow-300 px-5 rounded-full align-rigth"><i class="mdi mdi-thumb-up"></i>{{count($category->posts)}}</div>
                                </div>
                            </div>
                        </a>
                    </article>
                @endforeach
            </div>
        </div>

        {{-- Acreditacion --}}
        @livewire('acreditacion')

        {{-- Nuestras Autoridades --}}
        <div class="bg-gray-200">
            @livewire('autoridades')
        </div>
    </div>

</x-app-layout>
