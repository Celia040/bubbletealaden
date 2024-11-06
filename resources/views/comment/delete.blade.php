@extends('layouts.master') 
<!-- gehen zu ordner views, dann ordner layout, dann master datei -->

@section('title','Kommentare Löschen') 
<!-- Browser title ändern -->

@section('content')

<div class="container p-4">
<h2 class="text-center">Kommentare Löschen</h2>
   <p class="text-danger m-5 h3">Wollen Sie Ihre Kommentar <b class="bg-brown">"{{$comment->titel}}"</b> wirklich löschen?</p>  

<div class="card-header">
<i class="fa-solid fa-comments me-2 text-secondary"></i>
<b>{{$comment->titel}}</b>
   <span class="float-end h5">
    geschrieben am: <i>"{{$comment->created_at ? $comment->created_at->format('d.m.Y H:i') : 'unbekannt' }}"</i></span>
    
    @if($comment->updated_at > $comment->created_at)
    geändert am: <i>{{$comment->updated_at->format('d.m.Y H:i')}}</i>
    @endif
</div>

<div class="card-body bg-light">
    <p>{!!nl2br($comment->comment)!!}</p>  
</div>

  @auth
  @if(auth()->id() === $comment->user_id)
  <form action="/comment/{{$comment->id}}" method="POST" class="d-inline-block m-4">
      @csrf
      @method('DELETE')
    <button type="submit" value="löschen" class="btn btn-outline-danger" 
            title="Kommentar löschen" 
            onclick="return confirm('Wollen Sie den Kommentar \n{{$comment->titel}}\n wirklich löschen?')">
      <i class="fa-solid fa-trash-can h4 m-0 me-1"></i>
      Löschen
    </button>
  </form>
  @endif
  @endauth

  <a href="{{url('comment')}}" class="btn btn-primary d-inline-block">
  <i class="fa-solid fa-circle-left fs-4"></i>  
  Zurück
  </a>

</div>

@endsection