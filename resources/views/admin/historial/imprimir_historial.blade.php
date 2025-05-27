<?php
/**
 * Created by PhpStorm.
 * User: HILARIWEB
 * Date: 11/7/2024
 * Time: 15:55
 */
?>
    <!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<table border="0" style="font-size: 8pt">
    <tr>
        <td style="text-align: center">
            {{$configuracion->nombre}} <br>
            {{$configuracion->direccion}} <br>
            {{$configuracion->telefono}} <br>
            {{$configuracion->correo}} <br>
        </td>
        <td width="330px"></td>
        <td>
            <img src="{{url('storage/'.$configuracion->logo)}}" alt="logo" width="80px">
        </td>
    </tr>
</table>

<br>

<h3 style="text-align: center"><u>Historial clínico</u></h3>

<br>

<h4>Información del paciente</h4>
<table>
    <tr>
        <td><b>Paciente: </b></td>
        <td>{{$paciente->apellidos." ".$paciente->nombres}}</td>
    </tr>
    <tr>
        <td><b>Carnet de identidad: </b></td>
        <td>{{$paciente->ci}}</td>
    </tr>
    <tr>
        <td><b>Nro de seguro: </b></td>
        <td>{{$paciente->nro_seguro}}</td>
    </tr>
    <tr>
        <td><b>Fecha de nacimiento: </b></td>
        <td>{{$paciente->fecha_nacimiento}}</td>
    </tr>
</table>

<hr>

<h4>Diagnosticos realizados</h4>

@foreach($historiales as $historiale)
    <hr>
    <table>
        <tr>
            <td><b>Fecha: </b></td>
            <td>{{$historiale->fecha_visita}}</td>
        </tr>
        <tr>
            <td><b>Resultado: </b></td>
            <td>{!! $historiale->detalle !!}</td>
        </tr>
    </table>
    <hr>
@endforeach



</body>
</html>
