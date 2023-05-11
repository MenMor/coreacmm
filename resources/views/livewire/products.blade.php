
@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="livewire/crear" class="btn btn-primary">CREAR</a>

        <table class="table-fixed w-full">
            <thead>
                <tr class="bg-indigo-600 text-white">
                    <th class="px-4 py-2">Nombre</th>
                    <th class="px-4 py-2">Descripcion</th>
                    <th class="px-4 py-2">Precio</th>
                    <th class="px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td class="border px-4 py-2">{{$product->name}}</td>
                    <td class="border px-4 py-2">{{$product->description}}</td>
                    <td class="border px-4 py-2">{{$product->price}}</td>
                    <td class="border px-4 py-2 text-center">
                        <button wire:click="editar({{$product->id}})" class="font-bold py-2 px-4">Editar</button>
                        <button wire:click="borrar({{$product->id}})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Borrar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>    
        
        </div>
    </div>
</div>

