<x-app-layout>

    <div class="container py-8 bg-white">
        <h1 class="title p-5">
            {{$post->name}}
        </h1>
        <div class="text-center">
            @foreach ($post->tags as $tag)
                <a href="{{route('posts.tag', $tag)}}" class="inline-block bg-{{$tag->color}}-400 rounded-full px-3 py-1 text-base mr-2">{{$tag->name}}</a>
            @endforeach
        </div>
        <div class="text-sm mt-3 px-10 text-yellow-500 text-right">
            <i class="fas fa-clock"></i></i>&nbsp; Publicado el {{$post->created_at->format('Y-m-d')}} a las {{$post->created_at->format('H:i:s')}}
        </div>
        <div class="text-xl text-gray-500 p-10 text-justify">
            {!!$post->extract!!}
        </div>
        <div class="grid grid-cols-1 gap-6">

            {{-- Contenido Principal --}}
            <div>
                <figure class="rounded-xl">
                    @if ($post->image)
                        <img class="mx-auto w-auto h-96 object-cover object-center rounded-md" src="{{Storage::url($post->image->url)}}" alt="">
                    @else
                        <img class="w-full h-96 object-cover object-center rounded-md" src="{{ URL::asset('../img/poster.jpg') }}" alt="">
                    @endif
                </figure>
                <div class="py-20 px-14 text-xl text-justify text-gray-500">
                    <textarea id="body">
                        {!! html_entity_decode($post->body) !!}
                    </textarea>
                </div>
            </div>
        </div>
        <div class="bg-gray-100 py-10 container rounded-md">
            <div class="m-6">
                <h1 class="text-3xl font-bold">Similares en: {{$post->category->name}}</h1>
            </div>
            {{-- Contenido Relacionado --}}
            <aside class="">
                    @foreach ($similares as $similar)
                        <div class="mb-5">
                            <a href="{{route('posts.show', $similar)}}" class="flex w-full transform transition-all duration-300 scale-100 hover:scale-95">
                                <div class="block w-2/5 rounded overflow-hidden" style="background:
                                                url(@if ($similar->image)
                                                        {{Storage::url($similar->image->url)}}
                                                    @else
                                                        {{ URL::asset('../img/default-emi.jpg') }}
                                                    @endif) center; background-size: cover;"></div>
                                <div class="pl-3 w-3/5 mt-auto mb-auto">
                                    <p class="text-md text-blue-emi uppercase font-semibold">{{$similar->name}}</p>
                                    <p class="text-xs font-semibold leading-tight mb-3">{!! $similar->extract !!}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
            </aside>
            {{$similares->links()}}
        </div>
    </div>

</x-app-layout>

<script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#body' ) , {
            toolbar: [],
            heading: {
                options: [
                ]
            }
        })
        .then(editor => {
            console.log( editor );
            editor.isReadOnly = true; // make the editor read-only right after initialization
            editor.ui.view.editable.element.style.border = 'none';
        } )
        .catch( error => {
            console.error( error );
        } );

</script>
