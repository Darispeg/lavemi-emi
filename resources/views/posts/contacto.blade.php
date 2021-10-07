<x-app-layout>
    <div class="container py-8 bg-white">

        <h2 class="text-center text-blue-emi text-4xl font-mono font-black ml-auto mr-auto py-6">
            CONTÁCTENOS
        </h2>

        {{-- LAVEMI --}}
        <article class="m-5 bg-gray-100 rounded-2xl border-4 border-light-blue-500 grid grid-cols-2">
            <h4 class="text-left text-blue-emi text-xl font-mono font-black mx-auto p-6">
                Contáctos
            </h4>
            <a href="#" class="rounded-lg transform transition-all duration-300 scale-100 hover:scale-95 text-xl mx-auto p-6">
                79752455
            </a>
        </article>

        <article class="m-5 bg-gray-100 rounded-2xl border-4 border-light-blue-500 grid grid-cols-2">
            <h4 class="text-left text-blue-emi text-xl font-mono font-black mx-auto p-6">
                Dirección
            </h4>
            <p class="rounded-lg transform transition-all duration-300 scale-100 hover:scale-95 text-xl mx-auto p-6">
                Av Arce, Nro 2642 - Frente al Multicine <br>
                La Paz - Bolivia
            </p>
        </article>
        <div>
            <iframe class="container w-full h-96"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3824.818145838193!2d-68.0891574740895!3d-16.535276035108705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f212398c5d1b5%3A0x1e20bc0a1880e88c!2sEscuela%20Militar%20de%20Ingenier%C3%ADa%2C%20Av.%20Rafael%20Pab%C3%B3n%2C%20La%20Paz!5e0!3m2!1ses!2sbo!4v1630964286034!5m2!1ses!2sbo"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>

        {{-- Acreditacion --}}
        @livewire('acreditacion')

        {{-- Nuestras Autoridades --}}
        <div class="bg-gray-200">
            @livewire('autoridades')
        </div>
    </div>

</x-app-layout>
