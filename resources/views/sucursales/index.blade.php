<x-guest-layout>
    <x-guest-navegation-menu />
    <div>
        <div class="grid md:grid-cols-2">
        @foreach ($sucursales as $sucursal)
            <div class="grid md:grid-cols-2 lg:grid-cols-2 p-6">
                <img src="{{ $sucursal->img }}" alt="">
                <div class="bg-white p-2">
                    <span> Nombre: {{$sucursal->name}} </span>
                    <br>
                    <span>Ubicacion: {{ $sucursal->location }}</span>
                    <br>
                    <span>Horario</span>
                    <br>
                    <ul class="ml-4">
                        <li>Lunes : {{ $sucursal->hours['Monday'] }}</li>
                        <li>Martes : {{ $sucursal->hours['Tuesday'] }}</li>
                        <li>Miercoles : {{ $sucursal->hours['Wednesday'] }}</li>
                        <li>Jueves : {{ $sucursal->hours['Thursday'] }}</li>
                        <li>Viernes : {{ $sucursal->hours['Friday'] }}</li>
                        <li>Sabado : {{ $sucursal->hours['Saturday'] }}</li>
                        <li>Domingo : {{ $sucursal->hours['Sunday'] }}</li>
                    </ul>
                    <span>Telefono: <a href="tel:{{ $sucursal->phone }}">{{ $sucursal->phone }}</a></span>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</x-guest-layout>