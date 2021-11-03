<div>
    <div>
        <div class="p-4">
            <p class="text-white">Seleccina una sucursa</p>
            <select name="sucursal" id="sucursal" class="rounded-sm" wire:model="sucursal_id">
                <option selected value="0">Todos los comics</option>
                @foreach ($sucursales as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="grid md:grid-cols-3 sm:grid-cols-1 lg:grid-cols-3 m-5 mb-10 mt-10">
        @foreach ($series as $comic)
            <div class="p-2 m-7 flex">
                <img src="{{ $comic['thumbnail']['path'] . '/portrait_uncanny.' . $comic['thumbnail']['extension'] }}"
                    class="w-24" style="margin: auto; width: 50%">
                <div class="flex-1 bg-gray-500">
                    <h1 class="text-2xl text-center text-white mt-10">{{ $comic['title'] }}</h1>
                    <p class="ml-4 mt-5 text-white"><i class="fas fa-check-circle mr-2"></i>Clasificacion
                        {{ $comic['rating'] }}</p>
                    <p class="ml-4 mt-5 text-white"><i class="fas fa-sync mr-2"></i>Ultima actualizacion
                        {{ date('d-M-y', strtotime($comic['modified'])) }}</p>
                    <p class="text-center" style="margin-top: 20%">
                        <a href="{{ route('comic', $comic['id']) }}"
                            class="mt-10 text-center bg-gray-800 text-white p-2 rounded-md uppercase">
                            <i class="fa fa-info-circle mr-2"></i> más detalles
                        </a>
                        <a href="" onclick="openModal()"
                            class="ml-2 text-center bg-blue-800 text-white p-2 rounded-md uppercase"><i
                                class="fa fa-edit"></i></a>
                    </p>
                </div>
            </div>
        @endforeach
        <div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
            style="background: rgba(0,0,0,.7);">
            <div
                class="border border-teal-500 modal-container bg-white w-11/12 md:max-w-md mx-auto rounded z-50 overflow-y-auto">
                <div class="modal-content py-4 text-left px-6">
                    <!--Title-->
                    <div class="flex justify-between items-center pb-3">
                        <p class="text-2xl font-bold">Header</p>
                        <div class="modal-close cursor-pointer z-50">
                            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18"
                                height="18" viewBox="0 0 18 18">
                                <path
                                    d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <!--Body-->
                    <div class="my-5">
                        <p>Inliberali Persius Multi iustitia pronuntiaret expeteretur sanos didicisset laus angusti
                            ferrentur arbitrium arbitramur huic desiderent.?</p>
                    </div>
                    <!--Footer-->
                    <div class="flex justify-end pt-2">
                        <button
                            class="focus:outline-none modal-close px-4 bg-gray-400 p-3 rounded-lg text-black hover:bg-gray-300">Cancel</button>
                        <button
                            class="focus:outline-none px-4 bg-teal-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ mix('js/inventario.js') }}" defer></script>
</div>
