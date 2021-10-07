<div id="mision-vision">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="text-center py-8 px-3">
            <div class="border-solid border-2 rounded-full h-20 w-20 ml-auto mr-auto border-blue-emi">
                <i class="px-2 py-2 far fa-lightbulb text-6xl text-blue-emi"></i>
            </div>
            <h3 class="text-3xl font-bold text-blue-emi py-6">Misión</h3>
            <p>
                {{$mision->description}}
            </p>
        </div>
        <div class="text-center py-8 px-3">
            <div class="border-solid border-2 rounded-full h-20 w-20 ml-auto mr-auto border-blue-emi">
                <i class="px-2 py-2 fa fa-chart-line text-6xl text-blue-emi"></i>
            </div>
            <h3 class="text-3xl font-bold text-blue-emi py-6">Visión</h3>
            <p>
                {{$vision->description}}
            </p>
        </div>
    </div>
</div>
