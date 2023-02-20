@extends('layouts.app') 

@section('titulo')
    Pagina principal
@endsection
@section('contenido')
    <x-listar-post :posts="$posts"/>
@endsection

