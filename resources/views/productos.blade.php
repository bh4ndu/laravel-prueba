<h1>holiiii!</h1>

@php 
    $nombre = "henri";
    $edad = "19";
@endphp

<h2>hola {{$nombre}}</h2> 

@if ($edad >=18)
<h3>eres mayor de edad</h3>
@else
<h3>eres menor de edad</h3>
@endif