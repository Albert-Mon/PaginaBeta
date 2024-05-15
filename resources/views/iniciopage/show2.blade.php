@extends('layout.plantilla')

@section('title', 'Inicio Dayitsa')

@section('content')
    <h1>MANTENIMIENTO Y CONSTRUCCIÓN <br> DAYIT S.A DE C.V.</h1>
    <H3>Imagínalo, Nosotros lo Construimos.</H3>
    <h4>Bienvenido, este es el correo: {{$contacto->id}}</h4>
        <br> Con el nombre: {{$contacto->nombre}}
        <br> Compañia: {{$contacto->compañia}}
        <br> Telefono: {{$contacto->telefono}}
        <br> Email: {{$contacto->email}}
        <br> Asunto: {{$contacto->asunto}}
        <br> Mensaje: {{$contacto->mensaje}}        

@endsection