@extends('adminlte::page')

@section('title', '$categories')

@section('content_header')
    <h1>Categorias</h1>
@stop

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
        
        @if(session()->has('message'))
            <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <h4>{{ session('message')}}</h4>
                    </div>
                </div>
            </div>
        @endif

        <button wire:click="crear()" class="font-bold py-2 px-4 my-3" >Nuevo</button>
        @if($modal)
            @include('livewire.crearcategory')   
        @endif   

        <table class="table-fixed w-full">
            <thead>
                <tr class="bg-indigo-600 text-white">
                    <th class="px-4 py-2">Nombre</th>
                    <th class="px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td class="border px-4 py-2">{{$category->name}}</td>
                    <td class="border px-4 py-2 text-center">
                        <button wire:click="editar({{$category->id}})" class="font-bold py-2 px-4">Editar</button>
                        <button wire:click="borrar({{$category->id}})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Borrar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>    
        
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
