
@extends('layout.plantilla')

@section('title', 'Inicio Dayitsa')

@section('content')
    <h1>MANTENIMIENTO Y CONSTRUCCIÓN <br> DAYIT S.A DE C.V.</h1>
    <H3>Imagínalo, Nosotros lo Construimos.</H3>
    <a href="{{route('contactos.index')}}">INICIO</a>
    <ul>
        @foreach ($contactos as $contact)
            <li> 
                <a href="{{route('contactos.show2', $contact->id)}}">{{$contact->compañia}}</a>
            </li>
        @endforeach
    </ul>

    {{$contactos->links()}}

@endsection