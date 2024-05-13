
@extends('layout.plantilla')

@section('title', 'Inicio Dayitsa')

@section('content')
    <h1>MANTENIMIENTO Y CONSTRUCCIÓN <br> DAYIT S.A DE C.V.</h1>
    <H3>Imagínalo, Nosotros lo Construimos.</H3>
    <ul>
    <a href="{{route('contactos.index')}}">Inicio</a>
        @foreach ($contactos as $contact)
            <li> 
                <a href="">{{$contact->nombre}}</a>
            </li>
        @endforeach
    </ul>

    {{$contactos->links()}}

@endsection