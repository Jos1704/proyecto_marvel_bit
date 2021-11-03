<div>
    <x-guest-navegation-menu />    
    <div class="grid md:grid-cols-3 sm:grid-cols-1 lg:grid-cols-3 m-5 mb-10 mt-10">
        @foreach($series as $comic)
            <div class="p-2 m-7 flex">
                <img src="{{ $comic['thumbnail']['path'].'/portrait_uncanny.'.$comic['thumbnail']['extension'] }}" class="w-24" style="margin: auto; width: 50%">
                <div class="flex-1 bg-gray-500">
                    <h1 class="text-2xl text-center text-white mt-10" >{{$comic['title']}}</h1>
                    <p class="ml-4 mt-5 text-white"><i class="fas fa-check-circle mr-2"></i>Clasificacion {{ $comic['rating'] }}</p>
                    <p class="ml-4 mt-5 text-white"><i class="fas fa-sync mr-2"></i>Ultima actualizacion {{ date('d-M-y', strtotime($comic['modified']))  }}</p>
                    <p class="text-center" style="margin-top: 50%">
                        <a href="{{ route('comic', $comic['id']) }}" class="mt-10 text-center bg-gray-800 text-white p-2 rounded-md uppercase">
                            <i class="info-circle mr-2"></i> más detalles
                        </a>
                    </p>

                </div>
            </div>
        @endforeach
    </div>
</div>
