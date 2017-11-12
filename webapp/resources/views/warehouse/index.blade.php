@extends('layouts.app')
@section('tittle','Lista de Alamacenes');
@section('content')

<table class="table table-striped">
    <thead>
        <th>Nombre</th>
        <th>Volumen</th>
        <th>Sucursal</th>
        <th>Cuidad</th>
        <th>Responsable</th>
    </thead>
    <tbody>
        @foreach( )
            <tr>
                <td>{{}}</td>
                <td>{{}}</td>
                <td>{{}}</td>
                <td>{{}}</td>
                <td>{{}}</td>
            </tr>
    </tbody>
</table>
@endsection