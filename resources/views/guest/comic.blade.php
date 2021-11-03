<x-guest-layout>
    <x-guest-navegation-menu />
    <!-- start comic info -->
    <div class="comic-info border-b border-gray-800 text-white">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src="{{ $comic['thumbnail']['path'] . '/portrait_uncanny.' . $comic['thumbnail']['extension'] }}"
                    alt="{{ $comic['title'] . ' Cover' }}" class="w-70 md:w-96">
            </div>
            <div class="md:ml-20">
                <h2 class="text-4xl font-semibold">{{ $comic['title'] }}</h2>
                <div class="mt-10">
                    <p>Volumnen</p>
                    {{-- <p class="text-4xl font-semibold">{{ $comic['issueNumber'] }}</p> --}}
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-2">
                    <div class="mt-10">
                        <span><i class="far fa-calendar-alt"></i> Fechas:</span>
                        @foreach ($comic['dates'] as $dasteComic)
                            <p class="ml-2">{{ $dasteComic['type'] }}</p>
                            <p>{{ $dasteComic['date'] }}</p>
                        @endforeach
                    </div>
                    <div>
                        <span><i class="far fa-file"></i> Paginas: {{ $comic['pageCount'] }}</span>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-2">
                    <div class="mt-10">
                        <p>Descripcion:</p>
                        @if ($comic['description'])
                            {!! $comic['description'] !!}
                        @else
                            <b class="mt-2">Description no disponible</b>
                        @endif
                    </div>
                    <div class="flex flex-wrap items-center text-gray-400 text-sm">
                        <span><i class="fas fa-dollar-sign"></i> Precio:</span>
                        @if ($comic['prices'][0]['price'] != 0)
                            <span class="mx-2">|</span>
                            {{ $comic['prices'][0]['price'] }} USD
                        @else
                            <span class="mx-2">|</span>
                            Gratis
                        @endif
                    </div>
                </div>
                <div class="mt-10">
                    <h4 class="text-white font-semibold">Creators</h4>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8 mt-2">
                        @foreach ($comic['creators']['items'] as $creator)
                            <div class="ml-8">
                                <div>{{ $creator['name'] }}</div>
                                <div class="text-sm text-gray-400">{{ ucfirst($creator['role']) }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end comic info -->

    <div class="comic-characters border-b border-gray-800 text-white">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Personajes</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @if (count($comic['characters']['items']) > 0)
                    @foreach ($comic['characters']['items'] as $character)
                    <div class="mt-8">
                        <a href="" class="personaje-datos p-4 rounded-sm" data-url="{{$character['resourceURI'] }}">
                            {{ $character['name'] }}
                        </a>
                        <div class="data-personaje" data-name="{{ $character['name'] }}"></div>
                    </div>
                    @endforeach
                @else
                    <p class="text-center mt-9">Ningun personaje disponible</p>
                @endif
            </div>
        </div>
    </div>
    @section('scripExtra')
    <script src="{{ mix('js/comic.js') }}" defer></script>    
    @endsection
    
</x-guest-layout>
