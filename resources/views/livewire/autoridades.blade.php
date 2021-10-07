<div class="p-10">
    <h3 class="title" id="autoridades">
        Nuestras Autoridades
    </h3>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        @foreach ($autoridades as $autoridad)
            <div class="text-center mr-auto ml-auto">
                <img class="rounded-lg h-80 w-80 p-5" src="{{Storage::url($autoridad->image->url)}}" alt="">
                {!!$autoridad->description!!}
            </div>
        @endforeach
    </div>
</div>
