<x-app-layout>
    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8 bg-white">
        <h1 class="title">{{$category->name}}</h1>

        <div>
            @foreach ($posts as $post)

                <x-card-post :post="$post"/>

            @endforeach

            <div class="mt-4">
                {{$posts->links()}}
            </div>
        </div>

        {{-- Acreditacion --}}
        <div class="py-10">
            @livewire('acreditacion')
        </div>

        {{-- Nuestras Autoridades --}}
        <div class="bg-gray-200">
            @livewire('autoridades')
        </div>
    </div>
</x-app-layout>

