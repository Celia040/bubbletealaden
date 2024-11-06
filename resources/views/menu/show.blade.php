@extends('layouts.master') 
<!-- gehen zu ordner views, dann ordner layout, dann master datei -->

@section('title','Menükarte Detailansicht') 
<!-- Browser title ändern -->

@section('content')

<h1 class="text-center">Unser Menü</h1>
<h2>Kategorie</h2>

<table class="w-100">
    
    <thead class="bg-brown">
        <tr>
            <th>Sorte</th>
            <th>Name</th>
            <th>Größe/Liter</th>            
            <th>Extras</th>
            <th>Preis/&#8364;</th>
        </tr>
    </thead>
    <tbody>
    @foreach($menus AS $menu)    
        <tr>
            <td>{{$menu->sorte}}</td>
            <td>{{$menu->name}}</td>
            <td>{{$menu->volume}}</td>
            <td>{{!empty($menu->special) ? $menu->special : '--' }}</td>
            <td>{{$menu->preis}}</td>
        </tr>
        
    </tbody>
    @endforeach
</table>

<a href="{{ url('/menu') }}" class="btn btn-primary m-4">Zurück zur Übersicht</a>

@endsection
