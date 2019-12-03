@extends('layouts.master')
@section('content')

<h4> @lang('register.welcome') {{ strtoupper($name) }} {{ strtoupper($lastname) }}</h4>
<hr>
<br>

<h2>Backend Code Test</h2>

<br>

<h4><b>Descripción:</b></h4>

<p>Requisitos necesarios:</p>
<ul class="list-group">
    <li class="list-group-item ">Lenguaje Back end PHP7 con programación orientada a objetos, preferiblemente utilizando el framework Codeigniter última versión.</li>
    <li class="list-group-item">Diseño propuesta libre, igualmente se pueden usar templates responsive bajo Bootstrap u otro similar.</li>
    <li class="list-group-item">Desarrollo Front end bajo HTML,CSS y JS se recomienda trabajar con JQuery , Angular, Vue o ReactJS.</li>
    <li class="list-group-item">API de Facebook SDK PHP y/o el Open Graph de Javascript.</li>
    <li class="list-group-item">Base de datos MySQL.</li>
</ul>
<br>
<p>Entregar:</p>
<ul class="list-group">
    <li class="list-group-item ">Sitio Web empaquetado en formato ZIP(Link de descarga o adjunto en el email).</li>
    <li class="list-group-item">Archivo TXT con las instrucciones de instalación.</li>
    <li class="list-group-item">Modelo relacional usando la herramienta MySQL Workbench y dump en archivo “.SQL” que contiene la estructura y datos a restaurar.</li>
    <li class="list-group-item">Pantallazos o Video que evidencien el correcto funcionamiento del App en su entorno local o de pruebas.</li>
    <li class="list-group-item">Opcionalmente un link de pruebas público en Internet.</li>
</ul>

@endsection