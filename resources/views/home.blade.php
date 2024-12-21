@extends('layouts.app')

@section('title','Laravel')

@push('css')
    <style>
        body{
            background-color: #f3f3f3;
        }
    </style>
@endpush

@section('content')
    <div class="max-w-4xl mx-auto px-4">

        <x-alert2 type="danger" class="mb-4">
            <x-slot name="title">
                titulo
            </x-slot>


            Contenido de la alerta
        </x-alert2>  
        
        <p>hola</p>

    </div>
@endsection

    

    

