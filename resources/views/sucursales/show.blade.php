<x-app-layout>
    <div class="container mx-auto p-6">
        <a href="{{ route('add_sucursales') }}" class="bg-green-500 uppercase rounded-sm p-3 text-white mb-4">Agregar Sucursal</a>
        @foreach ($sucursales as $item)
        <article class="border-b bg-gray-500 mt-4">
            <div>
                <header class="flex justify-between items-center p-5 pl-8 pr-8 cursor-pointer select-none">
                    <span class="text-white font-thin text-xl">
                        {{ $item['name'] }}
                    </span>
                    <div class="rounded-full border border-grey w-7 h-7 flex items-center justify-center">
                        <!-- icon by feathericons.com -->
                        <svg aria-hidden="true" data-reactid="281" fill="none" height="24" stroke="white"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24"
                            width="24" xmlns="http://www.w3.org/2000/svg">
                            <polyline points="18 15 12 9 6 15">
                            </polyline>
                        </svg>
                    </div>
                </header>
            </div>
        </article>
        <article class="border-b">
            <div>
                <header class="flex justify-between items-center p-5 pl-8 pr-8 cursor-pointer select-none">
                    <span class="text-indigo font-thin text-xl">
                        
                    </span>
                </header>
                <div>
                    <div class="pl-8 pr-8 pb-5 text-grey-darkest">
                    </div>
                </div>
            </div>
        </article>
        @endforeach
    </div>
</x-app-layout>
