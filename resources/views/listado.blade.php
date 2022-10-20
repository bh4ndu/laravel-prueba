<h1>listado de alumnos</h1>

<table width="100" border="1">
    <tr>
    <th>nombre</th>
    <th>edad</th>
    <th>DNI</th>
    <th>estado</th>
    </tr>
    @foreach ($alumnos as $alumno)
    <tr>
        <td>{{$alumno->nombre}}</td> 
        <td>{{$alumno->edad}}</td>
        <td>{{$alumno->DNI}}</td>
        <td>{{$alumno->relacion->estado}}</td>
    </tr>
    @endforeach
</table>