@extends('layouts.master') 
<!-- gehen zu ordner views, dann ordner layout, dann master datei -->

@section('title','Kunden Detailansicht') 
<!-- Browser title ändern -->

@section('content')

<h2 class="text-center text-blue">Kurz Info über den Kunden</h2>
<div class="container p-4">
<ul class="list-group">
  <li class="list-group-item"><b>name: </b>{{$user->name}}</li>
  <li class="list-group-item"><b>Wohnort: </b>{{$user->city}}</li>
  <li class="list-group-item"><b>Über mich: </b>{{$user->info}}</li>
</ul>

<a href="{{url('comment')}}" class="btn btn-primary mt-2 float-end">
  <i class="fa-solid fa-circle-left fs-4"></i>  
  Zurück
  </a>

</div>

@endsection