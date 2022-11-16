<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ventas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="table">
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Fecha de venta</th>
                            <th>Acciones</th>
                        </tr>
                        <tr>
                            <td>Lapiz</td>
                            <td>100</td>
                            <td>1.00</td>
                            <td>16/11/2022</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Plumon</td>
                            <td>250</td>
                            <td>2.00</td>
                            <td>16/11/2022</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Cuaderno</td>
                            <td>500</td>
                            <td>2.50</td>
                            <td>16/11/2022</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Calculadora</td>
                            <td>589</td>
                            <td>5.00</td>
                            <td>16/11/2022</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
