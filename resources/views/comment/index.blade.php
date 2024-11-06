@extends('layouts.master') 
<!-- gehen zu ordner views, dann ordner layout, dann master datei -->

@section('title','Kommentare') 
<!-- Browser title ändern -->

@section('content')

<div class="container">
<div class="card-header h2">
<i class="fa-solid fa-comments me-2 text-secondary"></i>
{{$zahl ? 'Alle Kommentare ('.$zahl.')' : 'Schreiben Sie einen Kommentare'}}  
</div>

  <div class="card-body h4 bg-light">
  @foreach($kommentare AS $kommentar)
  <div class="my-2 border border-primary p-2">
  <p><b class="badge bg-success">Titel</b> 
  {{$kommentar->titel}}
  <span class="float-end" style="font-size:1rem;">
    von <i class="fa-solid fa-user"></i>
    <!-----------von Wem ----------------- -->
    @if(isset($kommentar->user_id) && auth()->id() === $kommentar->user_id)
    <a href="/user/{{$kommentar->user_id}}">Ihnen</a> 
    @elseif(auth()->id() !== $kommentar->user_id)
    <a href="/user/{{$kommentar->user_id}}">{{$kommentar->user->name}}</a>
    @endif
    <!----------- wann ----------------- -->
  @if( isset($kommentar->updated_at) )
   am <b>{{$kommentar->updated_at->format('d.m.Y H:i') }}</b>
  @else
  (Kein Datum)
  @endif
  <span></p> 
  
  <p><b class="badge bg-warning">Bewertung</b> {{$kommentar->punkte}}/5</p>
   
  <a href="/comment/{{$kommentar->id}}" class="btn btn-outline-primary"><i class="fa-solid fa-eye h4 m-0"></i>
  Detailansicht</a>

  <!-- #################################### Edit, nur eingeloggt ################################################################### -->
  @auth
  @if(auth()->id() === $kommentar->user_id)
  <a href="/comment/{{$kommentar->id}}/edit" class="btn btn-outline-success" title="Kommentar bearbeiten"><i class="fa-solid fa-pen-to-square h4 m-0 me-1 text-dark"></i>
      Bearbeiten</a>

  <!-- #################################### Löschen, nur eingeloggt################################################################### -->
    
    <a href="/comment/del/{{$kommentar->id}}" class="btn btn-outline-danger">
    <i class="fa-solid fa-trash-can h4 m-0 m-0"></i>
    Löschen
    </a>

  @endif
  @endauth
  </div>
  @endforeach
  </div>

  <!-- #################################### Wenn eingeloggt, neu kommentar schreiben ################################################################### -->
  @auth
  <a href="/comment/create" class="btn btn-primary mt-2"><i class="fa-solid fa-circle-plus"></i>
  Neuer Kommentar anlegen</a>
  @endauth
  @guest
 
  <a href="/login"><b class="badge bg-warning text-dark p-2 fs-5">Registrierte User können gerne Kommentare schreiben</b></a>
 @endguest


</div>

@endsection