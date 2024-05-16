@extends('layout.plantilla')

@section('title', 'Inicio Dayitsa')

@section('content')
    <h1>MANTENIMIENTO Y CONSTRUCCIÓN <br> DAYIT S.A DE C.V.</h1>
    <H3>Imagínalo, Nosotros lo Construimos.</H3>
    {{-- <a href="{{route('contactos.create')}}">Enviar Nuevo correo</a> --}}
    {{-- <ul>
        @foreach ($contacto as $contact)
            <li> {{$contact->nombre}} </li>
        @endforeach
    </ul> --}}

    <H3>Ponte en Contacto</H3>
    <h4>Estaremos Gustosos de poder brindarte mayor información sobre nuestros servicios.</h4>
    <a href="{{route('contactoshow.show')}}">DATOS DE CONTACTO</a>

    <form action="{{route('contactos.envioemails')}}" method="POST">
        @csrf
        <label><br>
            Nombre: <br>
            <input type="text" name="nombre">
        </label>

        <label><br>
            Compañía: <br>
            <input type="text" name="compañia">
        </label>

        <label><br>
            Teléfono: <br>
            <input type="text" name="telefono">
        </label>

        <label><br>
            Email: <br>
            <input type="email" name="email">
        </label>

        <label><br>
            Asunto: <br>
            <input type="text" name="asunto">
        </label>

        <label><br>
            Tu Mensaje: <br>
            <textarea name="mensaje" rows="5"></textarea>
        </label>

        <br>
        <button type="submit">Enviar Correo</button>


    </form>

    {{-- {{ $contacto->links()}} --}}
@endsection
