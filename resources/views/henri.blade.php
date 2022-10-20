
    @php
        $nombre = "henri";
        $edad = "19";
    @endphp

    <h2>hola mundo soy {{$nombre}} </h2>
    
    @if($edad >= 18)
    <h3>eres mayor de edad</h3>
    @else
    <h3>eres un baby</h3>
    @endif

