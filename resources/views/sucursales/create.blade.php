<x-app-layout>
    <form action="{{ route('sucursales') }}" method="POST" class="p-10 m-auto">
        @csrf
        <div class="grid lg:grid-cols-2 sm:grid-cols-2 xl:grid-cols-2">
            <div class="block">
                <label class="text-white">Nombre</label>
                <x-jet-input name=""  class="p-4 m-4"/>
            </div>
            <div class="block">
                <label class="text-white">Numero de sucursal</label>
                <x-jet-input name=""  class="p-4 m-4"/>
            </div>
        </div>
        <div class="grid lg:grid-cols-2 sm:grid-cols-2 xl:grid-cols-2">
            <div>
                <label class="text-white">Horario</label>
                <x-jet-input name=""  class="p-4 m-4"/>    
            </div>
            <div>
                <label class="text-white">Location</label>
                <x-jet-input name=""  class="p-4 m-4"/>
            </div>
        </div>
        <div class="grid lg:grid-cols-2 sm:grid-cols-2 xl:grid-cols-2">
            <div>
                <label class="text-white">Status</label>
                <select name="" id="">
                    <option value="{{ App\Models\Sucursale::STATUS_ACTIVE }}">Activo</option>
                    <option value="{{ App\Models\Sucursale::STATUS_MANTENIMIENTO }}">Mantenimiento</option>
                    <option value="{{ App\Models\Sucursale::STATUS_DELETE }}">Baja</option>
                </select>
            </div>
            <div>
                <label class="text-white">Telefono</label>
                <x-jet-input name=""  class="p-4 m-4"/>
            </div>
        </div>
        <button type="submit" class="bg-green-500 p-3 rounded-sm uppercase">Registrar</button>
    </form>
</x-app-layout>